<?php

	/**
	* Sources:
	* 	1) http://stackoverflow.com/questions/16340086/looping-through-a-csv-file-to-insert-data-to-mysql-using-php-mysqli-prepared-sta
	* 	2) http://stackoverflow.com/questions/19106963/php-prepared-statements-and-transactions-in-a-loop
	* 	3) http://php.net/manual/en/function.fgetcsv.php
	*	4) http://php.net/manual/en/mysqli-stmt.bind-param.php
	*	5) http://us2.php.net/mysqli_fetch_array
	* 	
	* 	1. An INSERT statement to insert the first row of the main import to config_itemi.
	* 	2. SELECT LAST_INSERT_ID()
	* 	3. Last_insert_ID stored and used to insert into citype_genhdw.
	* 	4. Go back to step 1 and begin on row 2.
	*/
	$pagetitle = "Executing import..";
	include("layout/header.php");
	#include("inc/db_connect.php");
	
	#Determine what CSV file was selected
	if(isset($_GET['csv']))	{
			$csv = $_GET['csv'];		
	}
	else	{
			$csv = "";
	}
	
	#Connect
	$mysqli = mysqli_connect("localhost", "root", "", "automate_test");
	
	#Create the prepared statement
	$stmt = $mysqli->prepare("INSERT INTO assets(impacted, deactivated, faulty, baseline, urgency_level, activebaseline, impact_level, manufacturer, hardware_type, serial_num, username, status_level, owner, active, comp_name, purchase_order_number, asset_tag, cmdb_status, purchase_date, warranty_expires_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

	#Initialise the array
	$csvData = array("","","","","","","","","","","","","","","","","","","","");
	
	if (($handle = fopen("csv/".$csv, "r")) !== FALSE) {
	
		while (($csvData = fgetcsv ($handle, 1024, ",")) !== FALSE)	{
		
			#echo $csvData[0] . "; " . $csvData[1] . "; " . $csvData[2] . "; " . $csvData[3] . "; " . $csvData[4] . "; " . $csvData[5] . "; " . $csvData[6] . "; " . $csvData[7] . "; " . $csvData[8] . "; " . $csvData[9] . "; " . $csvData[10] . "; " . $csvData[11] . "; " . $csvData[12] . "; " . $csvData[13] . "; " . $csvData[14] . "; " . $csvData[15] . "; " . $csvData[16] . "; " . $csvData[17] . "; " . $csvData[18] . "; " . $csvData[19] . "<br />";
	
			#Bind parameters to the query
			$stmt->bind_param('sssissssssssssssssii', $csvData[0], $csvData[1], $csvData[2], $csvData[3], $csvData[4], $csvData[5], $csvData[6], $csvData[7], $csvData[8], $csvData[9], $csvData[10], $csvData[11], $csvData[12], $csvData[13], $csvData[14], $csvData[15], $csvData[16], $csvData[17], $csvData[18], $csvData[19]);
			
			#Run the prepared statement
			$stmt->execute();	
			
			#Find the last_insert_id() of each entry
			$query = "SELECT last_insert_id()";
			$result = mysqli_query($mysqli, $query);
			$row = mysqli_fetch_array($result, MYSQLI_NUM);
			
			#Here it is! Store this somewhere and do something with it
			echo $row[0] . "<br />";
			
			#Free the result set
			$result->free();			
		
		}
	
	}
	
	#Close open connections
	mysqli_close($mysqli);	
	fclose($handle);
	
	include("layout/footer.php");
	
?>