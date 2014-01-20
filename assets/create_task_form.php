<?php
	
	/**
	* HTML form that sends scheduled task details to create_task.php
	* https://stackoverflow.com/questions/5004233/jquery-ajax-post-example-with-php/5004276#5004276
	* https://stackoverflow.com/questions/1314518/sanitizing-users-data-in-get-by-php
	*/
	$pagetitle = "Create Scheduled Task";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");

	#Determine what invoice file was selected
	if(isset($_GET['invoice']))	{
			$invoice = $_GET['invoice'];		
	}
	else	{
			$invoice = "";
	}
	
	echo "<p>Placeholder: click <a href=http://localhost/automate/assets/create_task.php?invoice=$invoice>here</a> to create a scheduled task.</p>";
	
	require_once("/../inc/footer.php");
?>	