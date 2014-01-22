<?php
    
	require_once("/../inc/config.php");  
	require_once("/../inc/functions.php");
	
	#Connect
	$mysqli = mysqli_connect("localhost", "root", "", "automate");
	
	#SQL
	$tablename = "scheduled_tasks";
	$sql = "INSERT INTO $tablename (name, user, invoice, schedule, day, run_time, start_date, end_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
	
	#Variables
	$invoice = "2011";
	$name = $invoice . " Lease Return - " . date('d.m.Y');
	$user = "emccrann"; #Will capture currently logged in user when Sessions are sorted out
	$schedule  = $_POST['schedule'];
	$dayToRun  = $_POST['dayToRun'];
	$timeToRun  = $_POST['timeToRun'];
	$startDate  = $_POST['startDate'];
	$endDate  = $_POST['endDate'];
	$runAs = "SYSTEM";
	$task_created = "false";
	
	if($_POST['action'] == 'insert'){
		
		#Windows CLI command to create a scheduled task which executes a PHP file - may need to implement escapeshellarg()
		$command = "cmd /c schtasks /create /tn \"$name\" /tr \"C:\\xampp\\php\\php.exe -f C:\\xampp\\htdocs\\automate\\assets\\scheduled_task.php $invoice\" /sc $schedule /d $dayToRun /st $timeToRun /sd $startDate /ed $endDate /ru $runAs 2>&1";
		$issued_command = shell_exec($command);
		
		if (strpos($issued_command,'SUCCESS') !== false)	{
			echo "<div class=\"alert-box success\"><span>success: </span>$issued_command</div>";
			$task_created = "true";
		}
		else if(strpos($issued_command,'ERROR: Invalid syntax') !== false)	{
			$failed = "Invalid syntax issued. Please ensure you have filled in all fields.";
			echo "<div class=\"alert-box error\"><span>failed: </span>$failed <br />Syntax: $command</div>";
			$task_created = "false";
		}
		else if(strpos($issued_command,'already exists') !== false)	{
			$failed = "A task with that name already exists.";
			echo "<div class=\"alert-box error\"><span>failed: </span>$failed <br />Syntax: $command</div>";
			$task_created = "false";
		}
		
	}
	#This doesn't work yet
	if($task_created = "true")	{
	
		#Insert a record of this scheduled task into the database using prepared statements
		$ps = $mysqli->prepare($sql);
		
		if ( false === $ps )        {
				die_and_display('<p class=die>Preparing the statement failed: ' . htmlspecialchars($mysqli->error) . "</p>");                
		}
		
		#Bind parameters
		$rc = $ps->bind_param('ssssssss', $name, $user, $invoice, $schedule, $dayToRun, $timeToRun, $startDate, $endDate);
		
		if ( false === $rc )	{
			die_and_display('Binding parameters failed: ' . htmlspecialchars($ps->error));
		}
		
		#Run
		$rc = $ps->execute();
		if ( false === $rc )	{
			die_and_display('<div id="alert"><a class="alert">Executing import failed: ' . htmlspecialchars($ps->error) . '</a></div>');
		}
		
		$ps->close();

		echo "<div class=\"alert-box notice\"><span>notice: </span>Record added to DB.</div>";

	}	
	
?>