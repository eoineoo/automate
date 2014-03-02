<?php

	/**
	 * Auth.php
	 * Referenced tutorial: http:#www.hauntednipple.co.uk/?p=94
	 *
	 * Username and password vars posted from login.php are compared against database values
	 * Session variables created and assigned
	 */

	error_reporting(0);
	$pagetitle = 'Auth';
	require_once("inc/config.php");  
	require_once("inc/functions.php");
	require_once("inc/db_connect_automate.php");  
	require_once("inc/db_connect_swdata.php");  
	
?>

<html>
	<head>
		<?php echo "<title>Automate - $pagetitle</title>"; ?>
		<link rel="stylesheet" type="text/css" href="http://localhost/automate/inc/style.css">
		<script type="text/javascript" src="http://localhost/automate/resources/js/jquery.js"></script>
	</head>
	
	<body>
		<div id="wrapper">
		
			<!-- New banner div -->
			<div id="banner">
				<img src="http://localhost/automate/images/banner.png" alt="Automate" />
			</div>
			<!-- end banner div --> 
			
			<div id="spacer">&nbsp;</div>
			<div id="spacer">&nbsp;</div>
			
			<div id="content" align="center">
	
<?php
	
	#Create a new session, this will hold onto login data
	session_start();

	#Set up username, password and salt variables
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password = saltAndEncryptPassword($password);

	#Check username and password query
	$sql = "SELECT * FROM `users` WHERE username = '$username' AND password = '$password' LIMIT 1";

	#Connect to the automate DB and check the query
	$result = dbSetup($sql, "automate");
	checkQuery($result);

	while($row = mysql_fetch_array($result))	{
		$result_username = $row['username'];
		$result_password = $row['password'];
		$result_isadmin = $row['isadmin'];
	}

	#Check to see if they are valid and not an admin
	if(($result_password == $password) && ($result_username == $username) && ($result_isadmin == 'No'))	{
		#User is valid, mark as such in the session variables
		$_SESSION['loggedin'] = "1";
		$_SESSION['username'] = "$result_username";
		$_SESSION['isadmin'] = "0";
		echo "Logged in! Redirecting to Orders page..<br/>";
		header("refresh:2; url=main.php");
	}	
	#If they are an admin
	else if(($result_password == $password) && ($result_username == $username) && ($result_isadmin == 'Yes')) {
		$_SESSION['loggedin'] = "1";
		$_SESSION['username'] = "$result_username";
		$_SESSION['isadmin'] = "1";
		echo "Logged in! Redirecting to Admin page..<br/>";
		header("refresh:2; url=http://localhost/automate/admin/main.php");
	}
	#User entered invalid credentials
	else	{
		$_SESSION['loggedin'] = "0";
		echo "Invalid username or password combination.";
		header("refresh:2; url=login.php");
	}
	include("inc/footer.php");

?>