<?php
	
	/**
	* Laptop Config download page - PHP array passed from main.php, contents of array passed into PowerShell script
	*/
	$pagetitle = "";
	require_once("/../inc/config.php");  
	require_once("/../inc/functions.php");

	#Determine what serial is selected
	if(isset($_GET['serial']))	{
			$serial = $_GET['serial'];		
	}
	else	{
			$serial = "";
	}
	
	
	
?>	