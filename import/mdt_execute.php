<?php

	/**
	* Sources:
	*/
	$pagetitle = "Executing import..";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php"); 
	require_once("/../inc/functions.php");
	
	
	#Determine what CSV file was selected
	if(isset($_GET['csv']))	{
			$csv = $_GET['csv'];		
	}
	else	{
			$csv = "";
	}
	
	#Execute PowerShell import script
	$psDir = "C:\\xampp\\ps\\";
	$psApp = "powershell.exe";
	$psScriptDir = realpath(getcwd() . '/../resources');
	$psScript = "/mdt_import.ps1";
	$parameter = $csv;
	$runCMD = $psDir . $psApp . " " . $psScriptDir . $psScript . " " . $parameter . " 2>&1";
	
	#Execute command
	exec($runCMD);
	
	#Successful import, return to main page
	echo "<div id=\"successfulImport\"><img src=\"..\images/success.png\" /> <b> Import successful.</div>";
	header("refresh:8; url=main.php");
	
	require_once("/../inc/footer.php");  
	
?>