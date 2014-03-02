<?php

	/**
	* Sources:
	*/
	$pagetitle = "Executing import..";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php"); 
	require_once("/../inc/functions.php");
	checkLogin();
	
	#Determine what CSV file was selected
	if(isset($_GET['csv']))	{
			$csv = $_GET['csv'] . ".csv";
	}
	else	{
			$csv = "";
	}
	
	#Execute PowerShell import script
	$psDir = "C:\\xampp\\ps\\";
	$psApp = "powershell.exe";
	$psScriptDir = realpath(getcwd() . '/../resources/ps');
	$psScript = "/mdt_import.ps1";
	$parameter = $csv;
	$runCMD = $psDir . $psApp . " " . $psScriptDir . $psScript . " " . $parameter . " 2>&1";
	
	#Debugging
	/* echo $runCMD;
	$output = shell_exec($runCMD);
	echo( '<pre>' );
	echo($output);
	echo( '</pre>' );
	exec($runCMD,$output);
	var_dump($output); */
	
	#Execute command
	echo exec($runCMD);
	
	#Successful import, return to main page
	echo "<div id=\"successfulImport\"><img src=\"/automate/images/success.png\" /> <b> Import successful.</div>";
	header("refresh:8; url=/automate/import");
	
	require_once("/../inc/footer.php");  
	
?>