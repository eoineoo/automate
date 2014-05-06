 <?php
    
   /**
	* Create_task.php
	*
	* Creates a Windows Scheduled Task that executes scheduled_task.php, 
	* Inserts record into automate.scheduled_tasks if successful
	* Information received from create_task_form.php
	*/
	
	require_once("/../inc/config.php");  
	require_once("/../inc/functions.php");
	checkLogin();
	
	#Connect
	$mysqli = mysqli_connect("localhost", "root", "", "automate");
	
	#SQL
	$tablename = "scheduled_tasks";
	$sql = "INSERT INTO $tablename (name, user, jobdesc, invoice, schedule, run_time, start_date, end_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
	
	#Variables
	$invoice  = $_POST['invoice'];
	$jobdesc = $_POST['jobdesc'];
	$name = $invoice . " " . ucfirst($jobdesc) . " Lease Return"; #e.g. 2011 Associate Lease Return
	$user = $_SESSION['username'];
	$schedule  = $_POST['schedule'];
	$timeToRun  = $_POST['timeToRun'];
	$startDate  = $_POST['startDate'];
	$endDate  = $_POST['endDate'];
	$runAs = "SYSTEM";
	
	if($_POST['action'] == 'insert'){
		
		#Windows CLI command to create a scheduled task which executes a PHP file
		$command = "cmd /c schtasks /create /tn \"$name\" /tr \"C:\\xampp\\php\\php.exe -f C:\\xampp\\htdocs\\automate\\assets\\scheduled_task.php $invoice $jobdesc\" /sc $schedule /st $timeToRun /sd $startDate /ed $endDate /ru $runAs 2>&1";
		$issued_command = shell_exec($command);
		
		#If the task was created succesfully, write a record to the database
		if (strpos($issued_command,'SUCCESS') !== false)	{
			
			#Insert record into DB
			$ps = $mysqli->prepare($sql);
			if ( false === $ps )        {
				die_and_display('<p class=die>Preparing the statement failed: ' . htmlspecialchars($mysqli->error) . "</p>");                
			}
		
			#Bind parameters
			$rc = $ps->bind_param('ssssssss', $name, $user, $jobdesc, $invoice, $schedule, $timeToRun, $startDate, $endDate);
			
			if ( false === $rc )	{
				die_and_display('Binding parameters failed: ' . htmlspecialchars($ps->error));
			}
			
			#Run
			$rc = $ps->execute();
			if ( false === $rc )	{
				die_and_display('<div id="alert"><a class="alert">Executing import failed: ' . htmlspecialchars($ps->error) . '</a></div>');
			}
			
			$ps->close();

			echo "<div class=\"alert-box success\">$issued_command<br />Record added to DB.</div>";
		}
		
		#Error-handling
		else if(strpos($issued_command,'ERROR: Invalid syntax') !== false)	{
			$failed = "Invalid syntax issued. Please ensure you have filled in all fields.";
			echo "<div class=\"alert-box error\"><span>failed: </span>$failed <br />Syntax: $command</div>";						
		}
		else if(strpos($issued_command,'already exists') !== false)	{
			$failed = "A task with that name already exists.";
			echo "<div class=\"alert-box error\"><span>failed: </span>$failed <br />Syntax: $command</div>";			
		}
		else	{
			$failed = "The task was not created.";
			echo "<div class=\"alert-box error\"><span>failed: </span>$failed <br />Syntax: $command</div>";
		}
		
	}	
	
?>