<?php

	/**
	 * Auth.php
	 * Referenced tutorial: http:#www.hauntednipple.co.uk/?p=94
	 *
	 * Username and password vars posted from login.php are compared against database values
	 * Session variables created and assigned
	 */

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
				<!--<h1 style="color:white;font-size:3em;font-family:Verdana, Arial, Helvetica, sans-serif;text-align: center;vertical-align: middle;line-height: 150px;">Automate</h1>-->
				<img src="http://localhost/automate/images/banner.jpg" />
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
		echo "<div style=\"width:50%\" class=\"alert-box success\">Logged in! Redirecting...</div>";
		header("refresh:2; url=http://localhost/automate/home");
	}	
	#If they are an admin
	else if(($result_password == $password) && ($result_username == $username) && ($result_isadmin == 'Yes')) {
		$_SESSION['loggedin'] = "1";
		$_SESSION['username'] = "$result_username";
		$_SESSION['isadmin'] = "1";
		echo "<div style=\"width:50%\" class=\"alert-box success\">Logged in! Redirecting to Admin page...</div>";
		header("refresh:2; url=http://localhost/automate/admin/");
	}
	#User entered invalid credentials
	else	{
		$_SESSION['loggedin'] = "0";
		echo "<div style=\"width:50%\" class=\"alert-box error\"><span>failed: </span>Invalid username or password combination.</div>";
		header("refresh:2; url=http://localhost/automate");
	}
	
?>	

		</div>
		<div id="spacer">&nbsp;</div>
		<div id="spacer">&nbsp;</div>
	</div>
		
	<div id="clearfooter">
	</div>
	
	<div id="footer" align="center">
		<p class="footer">Copyright (c) Automate - 2014</p>
		<p class="loginDetails">Not currently logged in.</p>
	</div>     
	
</body>
</html>