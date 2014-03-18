<?php

	/**
	* Recieve value(s) from user_accounts_modify.php, user_accounts_modify_form.php or user_accounts_create_form.php
	* Pass into SQL update statement and return result (success/failure) to the requesting page
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
	
	#Assign to Spares, mark as Unassigned
	if(($_POST['action'] == 'create') || ($_POST['action'] == 'modify') || ($_POST['action'] == 'delete')) {
		
		#Set up variables
		$tablename = "users";
		$id = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$isadmin  = $_POST['isadmin'];
		
		if($_POST['action'] == 'create')	{
			$sql = "INSERT INTO $tablename (username, password, isadmin) VALUES (?, ?, ?)";
			$output = "<div class=\"alert-box success\" width=\"60%\">User created.</div>";
			
			#Update table with prepared statement
			$ps = $mysqli->prepare($sql);
			if ( false === $ps )        {
				die_and_display_nf('<p class=die>Preparing the statement failed: ' . htmlspecialchars($mysqli->error) . "</p>");                
			}
				
			#Bind parameters
			$rc = $ps->bind_param('sss', $username, $password, $isadmin);
			if ( false === $rc )	{
				die_and_display_nf('Binding parameters failed: ' . htmlspecialchars($ps->error));
			}
		}
		
		if($_POST['action'] == 'modify')	{
			$sql = "";
			$output = "<div class=\"alert-box success\" width=\"60%\">User account updated.</div>";
		}
		
		if($_POST['action'] == 'delete')	{
			$sql = "DELETE FROM $tablename WHERE staff_id = ?";
			$output = "<div class=\"alert-box success\" width=\"60%\">User account deleted.</div>";
			
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
		}
		
		#Run
		$rc = $ps->execute();
		if ( false === $rc )	{
			die_and_display_nf('<div id="alert"><a class="alert">Executing import failed: ' . htmlspecialchars($ps->error) . '</a></div>');
		}
		
		$ps->close();
		
		echo $output;
		
	}

?>