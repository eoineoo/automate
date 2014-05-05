<?php
	
	session_start();
	
	/**
	* Download.php
	*
	* PHP array passed from main.php, contents of array echo'ed out so they become part of the PowerShell Script array
	* PowerShell script downloaded and should be executed on end-user computer
	*/
	$pagetitle = "";
	require_once("/../inc/config.php");  
	require_once("/../inc/functions.php");
	checkLogin();
	
	$array = $_POST['config'];
	
	#Dirty hack to get the PowerShell array formatted correctly, e.g. $apps = @("RDCMan.msi", "config.msi")
	echo '$apps = @(';
	foreach ($array as $item)	{
		echo '"' . $item . '", ';
	}
	echo '"config.msi")';
	
	#Insert record to db
	$user 			= 	$_SESSION['username'];
	$machine_name	= 	gethostname();
	$end_user 		= 	trim(substr(shell_exec('wmic COMPUTERSYSTEM Get UserName'), 13)); #Clean output from shell_exec, remove first 13 characters and white space
	$applications	= 	implode("<br />", $array);
	
	#Connect
	$mysqli = mysqli_connect("localhost", "root", "", "automate");

	#SQL Query
	$tablename = "config";
	$sql = "INSERT INTO $tablename (user, end_user, machine_name, applications) VALUES (?, ?, ?, ?)";
	
	#Create and check prepared statement
	$stmt = $mysqli->prepare($sql);
	if ( false === $stmt )	{
		die_and_display('<p class=die>Preparing the statement failed: ' . htmlspecialchars($mysqli->error) . "</p>");		
	}
	
	#Bind parameters to the query and check for errors
	$rc = $stmt->bind_param('ssss', $user, $end_user, $machine_name, $applications);
	if ( false === $rc )	{
		die_and_display('Binding parameters failed: ' . htmlspecialchars($stmt->error));
	}
	
	#Run and check the prepared statement
	$rc = $stmt->execute();	
	if ( false === $rc )	{
		die_and_display('<div id="alert"><a class="alert">Executing import failed: ' . htmlspecialchars($stmt->error) . '</a></div>');
	}
	
	#Download file
	$file_url = 'http://localhost/automate/config/msi/config.ps1';
	header('Content-Type: text/plain');
	header("Content-Transfer-Encoding: Binary"); 
	header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
	readfile($file_url);
	
	#Close connection
	$stmt->close();
	
?>	