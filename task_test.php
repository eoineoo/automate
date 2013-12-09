<?php 

	include("inc/functions.php");

	#Determine what CSV file was selected
	if(isset($_GET['csv']))	{
			$csv = $_GET['csv'];		
	}
	else	{
			$csv = "";
	}
	
	#Vars
	$orig_name = "Original Name";
	$new_name = "New Name";
	$user = "User";
	$num_entries = 100;
	$description = "Description";
	$url = "url";
	
	#Connect
	$mysqli = mysqli_connect("localhost", "root", "", "automate");
	
	#SQL Query
	$sql = "INSERT INTO csv_details(orig_name, new_name, user, num_entries, description, url) VALUES (?, ?, ?, ?, ?, ?)";
	
	#Create the prepared statement
	$stmt = $mysqli->prepare($sql);
	
	#Error checking the prepared statement
	if ( false === $stmt )	{
		die_and_display('<p class=die>Preparing the statement failed: ' . htmlspecialchars($mysqli->error) . "</p>");		
	}
	
	#Initialise data
	$csvData = array("","","","","","");
	
	#Bind parameters to the query
	$bp = $stmt->bind_param('sssiss', $orig_name, $new_name, $user, $num_entries, $description, $url);
	
	#Error checking for binded parameters
	if ( false === $bp )	{
		die_and_display('Binding parameters failed: ' . htmlspecialchars($stmt->error));
	}			
	
	#Run the prepared statement
	$bp = $stmt->execute();	
	
	#Error checking the execution of the prepared statement
	if ( false === $bp )	{
		die_and_display('<div id="alert"><a class="alert">Executing import failed: ' . htmlspecialchars($stmt_cmdb->error) . '</a></div>');
	}
	
?>