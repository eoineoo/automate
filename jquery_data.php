<?php
    
	$pagetitle = "JQuery Test";
	require_once("/inc/config.php");  
	require_once("/inc/functions.php");
	
	#Connect
	$mysqli = mysqli_connect("localhost", "root", "", "automate");
	
	#SQL
	$tablename = "scheduled_tasks";
	$sql = "INSERT INTO $tablename (name, invoice, schedule, day, run_time, start_date, end_date) VALUES (?, ?, ?, ?, ?, ?, ?)";
	
	#Variables
	$invoice = "2011";
	$name = $invoice . " Lease Return - " . date('d.m.Y');
	$schedule  = $_POST['schedule'];
	$dayToRun  = $_POST['dayToRun'];
	#These three are not getting posted for some reason - strange format?
	$timeToRun  = $_POST['timeToRun'];
	$startDate  = $_POST['startDate']; #YYYY-MM-DD
	$endDate  = $_POST['endDate']; #YYYY-MM-DD
	#$name = $_POST['name'];
	
	if($_POST['action'] == 'insert'){
		
		#Create prepared statement
		$ps = $mysqli->prepare($sql);
		if ( false === $ps )        {
				die_and_display('<p class=die>Preparing the statement failed: ' . htmlspecialchars($mysqli->error) . "</p>");                
		}
		
		#Bind parameters
		$rc = $ps->bind_param('sssssss', $name, $invoice, $schedule, $dayToRun, $timeToRun, $startDate, $endDate);
		if ( false === $rc )	{
			die_and_display('Binding parameters failed: ' . htmlspecialchars($ps->error));
		}
		
		#Run
		$rc = $ps->execute();
		if ( false === $rc )	{
			die_and_display('<div id="alert"><a class="alert">Executing import failed: ' . htmlspecialchars($ps->error) . '</a></div>');
		}
		
		$ps->close();
		
		echo "Task created.";
		#header("refresh:8; url=/automate/assets");
		
	}
?>