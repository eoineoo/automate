<?php

	/**
	* User_accounts_source.php
	* 
	* Administrators only
	* Recieve POST'ed value(s) from user_accounts_modify.php, user_accounts_modify_form.php or user_accounts_create_form.php
	* Pass into relevant SQL statement (depending on what method has been posted)
	* Return result (success/failure) to the requesting page
	*/
	
	require_once("/../inc/config.php");  
	require_once("/../inc/functions.php");
	checkAdminLogin();
	
	#Connect
	$mysqli = mysqli_connect("localhost", "root", "", "automate");
	
	#Check connection
	if (mysqli_connect_errno())	{
		die_and_display_nf('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
	}
	
	#Determine what button was selected on the previous page
	if(($_POST['action'] == 'create') || ($_POST['action'] == 'modify') || ($_POST['action'] == 'delete')) {
		
		#Set up variables
		$tablename 	= "users";
		$id 	  	= $_POST['id'];
		$username 	= $_POST['username'];
		$fullname 	= $_POST['fullname'];
		$password_c = saltAndEncryptPassword($_POST['password']);
		$password 	= $_POST['password'];
		$isadmin  	= $_POST['isadmin'];
		
		#Create user account
		if($_POST['action'] == 'create')	{

			$sql = "INSERT INTO $tablename (username, fullname, password, isadmin) VALUES (?, ?, ?, ?)";
		
			#Update table with prepared statement
			$ps = $mysqli->prepare($sql);
			if ( false === $ps )        {
				die_and_display_nf('<p class=die>Preparing the statement failed: ' . htmlspecialchars($mysqli->error) . "</p>");                
			}
				
			#Bind parameters
			$rc = $ps->bind_param('ssss', $username, $fullname, $password_c, $isadmin);
			if ( false === $rc )	{
				die_and_display_nf('Binding parameters failed: ' . htmlspecialchars($ps->error));
			}
			
			#Run
			$rc = $ps->execute();
			if ( false === $rc )	{
				die_and_display_nf('<div id="alert"><a class="alert">Executing import failed: ' . htmlspecialchars($ps->error) . '</a></div>');
			}
			
			$output = "<div class=\"alert-box success\" width=\"60%\">User $username created.</div>";
		}
		
		#Modify user account
		if($_POST['action'] == 'modify')	{
			
			#Check to see if the password has been changed
			$sqlPassword = "SELECT password from $tablename WHERE staff_id = $id";
			
			$connection = mysqli_connect("localhost", "root", "", "automate");
			
			if (mysqli_connect_errno())	{
				die_and_display('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
			}
			
			$result = mysqli_query($connection, $sqlPassword);
			
			while($row = mysqli_fetch_array($result))	{
				$oldPassword = $row['password'];
			}
			
			#Check to see if the new password was left blank
			if ($password == "")	{
				$password = $oldPassword;
			}
			else	{
				$password = saltAndEncryptPassword($password);
			} 
			
			$sql = "UPDATE $tablename SET username = ?, fullname = ?, password = ?, isadmin = ? WHERE staff_id = ?";
		
			#Update table with prepared statement
			$ps = $mysqli->prepare($sql);
			if ( false === $ps )        {
				die_and_display_nf('<p class=die>Preparing the statement failed: ' . htmlspecialchars($mysqli->error) . "</p>");                
			}
			
			#Bind parameters
			$rc = $ps->bind_param('ssssi', $username, $fullname, $password, $isadmin, $id);
			if ( false === $rc )	{
				die_and_display_nf('Binding parameters failed: ' . htmlspecialchars($ps->error));
			}
			
			#Run
			$rc = $ps->execute();
			if ( false === $rc )	{
				die_and_display_nf('<div id="alert"><a class="alert">Executing import failed: ' . htmlspecialchars($ps->error) . '</a></div>');
			}
			
			$output = "<div class=\"alert-box success\" width=\"60%\">User account updated.</div>";
			
		}
		
		#Delete user account
		if($_POST['action'] == 'delete')	{
			$sql = "DELETE FROM $tablename WHERE staff_id = ?";
			
			#Update table with prepared statement
			$ps = $mysqli->prepare($sql);
			if ( false === $ps )        {
				die_and_display_nf('<p class=die>Preparing the statement failed: ' . htmlspecialchars($mysqli->error) . "</p>");                
			}
				
			#Bind parameters
			$rc = $ps->bind_param('i', $id);
			if ( false === $rc )	{
				die_and_display_nf('Binding parameters failed: ' . htmlspecialchars($ps->error));
			}
			
			$output = "<div class=\"alert-box success\" width=\"60%\">User account $username deleted.</div>";
			
			#Run
			$rc = $ps->execute();
			if ( false === $rc )	{
				die_and_display_nf('<div id="alert"><a class="alert">Executing import failed: ' . htmlspecialchars($ps->error) . '</a></div>');
			}
	
		}
		
		$ps->close();
		
		echo $output;
	}

?>