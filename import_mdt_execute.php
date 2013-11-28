<?php

	/**
	* Sources:
	*/
	$pagetitle = "Executing import..";
	include("layout/header.php");
	include("inc/functions.php");
	
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
	$psScriptDir = getcwd() . "\\scripts\\";
	$psScript = "mdt_import.ps1";
	$parameter = $csv;
	$runCMD = $psDir . $psApp . " " . $psScriptDir . $psScript . " " . $parameter . " 2>&1";
	
	#Debugging
	#$output = shell_exec($runCMD);
	#echo( '<pre>' );
	#echo($output);
	#echo( '</pre>' );
	
	exec($runCMD);
	
	#Successful import, return to main page
	echo "<div id=\"successfulImport\"><img src=\"images/success.png\" /> <b> Import successful.</div>";
	header("refresh:8; url=home.php");
	
	include("layout/footer.php");
	
?>