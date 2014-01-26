<?php

	/**
	* Recieve value(s) from modify_asset.php, pass into SQL update statement and return result (success/failure)
	*/
	require_once("/../inc/config.php");  
	require_once("/../inc/functions.php");
	
	#Connect
	$mysqli = mysqli_connect("localhost", "root", "", "swdata");
	
	#Check connection
	if (mysqli_connect_errno())	{
		die_and_display_nf('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
	}
	
	#SQL
	$tablename = "assets";
	$sql = "UPDATE $tablename SET owner = ?, status_level = ? WHERE serial_num = ?";
	
	#Assign to Spares, mark as Unassigned
	if(($_POST['action'] == 'spares') || ($_POST['action'] == 'retired') || ($_POST['action'] == 'lost') || ($_POST['action'] == 'stolen')) {
		
		#Set up variables
		$serial = $_POST['serial'];
		
		if($_POST['action'] == 'spares')	{
			$assignedTo = "Spares";
			$status = "Unassigned";
		}
		if($_POST['action'] == 'retired')	{
			$assignedTo = "Retired";
			$status = "Retired";
		}
		if($_POST['action'] == 'lost')	{
			$assignedTo = "Unknown Location (Lost)";
			$status = "Unavailable";
		}
		if($_POST['action'] == 'stolen')	{
			$assignedTo = "Unknown Location (Stolen)";
			$status = "Unavailable";
		}
		
		#Update table with prepared statement
		$ps = $mysqli->prepare($sql);
		if ( false === $ps )        {
			die_and_display_nf('<p class=die>Preparing the statement failed: ' . htmlspecialchars($mysqli->error) . "</p>");                
		}
			
		#Bind parameters
		$rc = $ps->bind_param('sss', $assignedTo, $status, $serial);
		if ( false === $rc )	{
			die_and_display_nf('Binding parameters failed: ' . htmlspecialchars($ps->error));
		}
		
		#Run
		$rc = $ps->execute();
		if ( false === $rc )	{
			die_and_display_nf('<div id="alert"><a class="alert">Executing import failed: ' . htmlspecialchars($ps->error) . '</a></div>');
		}
		
		$ps->close();
		
		echo "<div class=\"alert-box success\" width=\"60%\">Asset ($serial) updated.</div>";
	}

?>