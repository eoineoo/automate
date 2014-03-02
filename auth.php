<?php

	/**
	 * Authenticate.php
	 * Referenced tutorial: http:#www.hauntednipple.co.uk/?p=94
	 *
	 * Username and password vars posted from login.php are compared against database values
	 * Session variables created and assigned
	 */

	$pagetitle = 'Auth';
	require_once("inc/config.php");  
	require_once("inc/header.php");  
	require_once("inc/functions.php");

	#Create a new session, this will hold onto login data
	session_start();

	#Set up username, password and salt variables
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password = saltAndEncryptPassword($password);

	#Main query - check username and password
	$sql = "SELECT * FROM `users` WHERE username = '$username' AND password = '$password' LIMIT 1";

	$result = dbSetup($sql);
	checkQuery($result);

	while($row = mysql_fetch_array($result))	{
		$result_username = $row['username']; #Database username
		$result_password = $row['password']; #Database password
		$result_isadmin = $row['isadmin']; #Are they an admin?
	}

	#Check to see if they are valid and not an admin
	if(($result_password == $password) && ($result_username == $username) && ($result_isadmin == 'No'))	{
		#User is valid, mark as such in the session variables
		$_SESSION['loggedin'] = "1";
		$_SESSION['username'] = "$result_username";
		$_SESSION['isadmin'] = "0";
		echo "Logged in! Redirecting to Orders page..<br/>";
		header("refresh:2; url=orders.php");
	}	
	#If they are an admin
	else if(($result_password == $password) && ($result_username == $username) && ($result_isadmin == 'Yes')) {
		$_SESSION['loggedin'] = "1";
		$_SESSION['username'] = "$result_username";
		$_SESSION['isadmin'] = "1";
		echo "Logged in! Redirecting to Admin page..<br/>";
		header("refresh:2; url=admin.php");
	}
	#User entered invalid credentials
	else	{
		$_SESSION['loggedin'] = "0";
		echo "Invalid username or password combination.";
		header("refresh:2; url=login.php");		
	}	

	include("layout/bottom.php");

?>