<?php
	
	session_start();
	
	/**
	* Laptop Config download 
	* PHP array passed from main.php, contents of array echo'ed out so they become part of the PowerShell Script array
	* PowerShell script downloaded and should be executed on end-user computer
	*/
	$pagetitle = "";
	require_once("/../inc/config.php");  
	require_once("/../inc/functions.php");

	$array = $_POST['config'];
	
	echo '$apps = @(';
	foreach ($array as $item)	{
		echo '"' . $item . '", ';
	}
	echo '"config.msi")';
	
	$file_url = 'http://localhost/automate/config/msi/config.ps1';
	header('Content-Type: text/plain');
	header("Content-Transfer-Encoding: Binary"); 
	header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
	readfile($file_url);
	
?>	