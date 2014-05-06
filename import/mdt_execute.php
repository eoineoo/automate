<?php

   /**
	* MDT_Execute.php 
	*
	* Referenced tutorials and sources:
	*  1) http://technet.microsoft.com/en-us/library/bb978526.aspx
	*	2) http://blogs.technet.com/b/mniehaus/archive/2009/05/15/manipulating-the-microsoft-deployment-toolkit-database-using-powershell.aspx
	*  3) http://stackoverflow.com/questions/5317315/executing-a-powershell-script-from-php
	*
	* Import assets to MDT database using PowerShell
	*
	* Execute PowerShell script "mdt_import.ps1" using PHP's exec() function
	* Uploaded CSV file is passed in to the exec() function as a parameter 
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