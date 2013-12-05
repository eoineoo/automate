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
	$psCmd = "-NoExit -Command {Set-ExecutionPolicy unrestricted}";
	$psScriptDir = getcwd() . "\\scripts\\";
	$psScript = "mdt_import.ps1";
	$parameter = $csv;
	$runCMD = $psDir . $psApp . " " . $psCmd . " " . $psScriptDir . $psScript . " " . $parameter . " 2>&1";
	echo $runCMD;
	
	#Debugging
	#$output = shell_exec($runCMD);
	#echo( '<pre>' );
	#echo($output);
	#echo( '</pre>' );
	
	exec($runCMD);
	#exec($runCMD,$output);
	
	#Successful import, return to main page
	echo "<div id=\"successfulImport\"><img src=\"images/success.png\" /> <b> Import successful.</div>";
	#var_dump($output);
	header("refresh:8; url=home.php");
	
	include("layout/footer.php");
	
?>