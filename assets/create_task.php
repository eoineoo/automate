<?php
	
	/**
	* Create a scheduled task that executes scheduled_task.php depending on user input
	* Inserts details of created task to automate.scheduled_tasks
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
	
	#Variables
	$name 		= $invoice . " Lease Return - " . date('d.m.Y');
	$schedule 	= "weekly";
	$day		= "MON";
	$time		= "08:00";
	$start_date = "20/01/2014";
	$end_date 	= "31/01/2014";
	$user		= "SYSTEM";
	
	#Anything to be changed in the scheduled task query: scheduled_task.php
	$region 	= "";
	
	#When allowing user-supplied data to be passed to this function, use escapeshellarg() or escapeshellcmd() to ensure that users cannot trick the system into executing arbitrary commands.
	$command = "cmd /c schtasks /create /tn \"$name\" /tr \"C:\\xampp\\php\\php.exe -f C:\\xampp\\htdocs\\automate\\assets\\scheduled_task.php $invoice\" /sc $schedule /d $day /st $time /sd $start_date /ed $end_date /ru $user";
	
	echo exec($command);
	
	require_once("/../inc/footer.php");
?>