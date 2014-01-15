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
	
	#When allowing user-supplied data to be passed to this function, use escapeshellarg() or escapeshellcmd() to ensure that users cannot trick the system into executing arbitrary commands.
	#$command = "cmd /c schtasks /create /tn \"$task_name\" /tr \"C:\\xampp\\php\\php.exe -f C:\\xampp\\htdocs\\automate\\assets_scheduled_task.php $invoice\" /sc weekly /d MON /st 08:00 /ed 31/01/2014 /ru SYSTEM";
	$command = "cmd /c schtasks /create /tn \"$task_name\" /tr \"C:\\xampp\\php\\php.exe -f C:\\xampp\\htdocs\\automate\\assets_scheduled_task.php $invoice\" /sc weekly /d MON /st 08:00 /ed 31/01/2014";
	#echo $command;
	echo exec($command);
	
	include("layout/footer.php");
?>