<?php
	
	/**
	* Create a scheduled task that executes assets_scheduled_task.php each week.
	*/
	$pagetitle = "Create Scheduled Task";
	include("layout/header.php");
	include("inc/functions.php");
	
	#Determine what invoice file was selected
	if(isset($_GET['invoice']))	{
			$invoice = $_GET['invoice'];		
	}
	else	{
			$invoice = "";
	}
	
	$task_name = $invoice . " Lease Return - " . date('d.m.Y');
	
	$command = "cmd /c schtasks /create /tn \"$task_name\" /tr \"C:\\xampp\\php\\php.exe -f C:\\xampp\\htdocs\\automate\\assets_scheduled_task.php $invoice\" /sc weekly /d MON /st 08:00 /ed 31/01/2014 /ru IE\\emccrann";
	#echo $command;
	echo exec($command);
	
	include("layout/footer.php");
?>