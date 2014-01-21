<?php

	/**
	* Sources:
	*         1) http://stackoverflow.com/questions/16340086/looping-through-a-csv-file-to-insert-data-to-mysql-using-php-mysqli-prepared-sta
	*         2) http://stackoverflow.com/questions/19106963/php-prepared-statements-and-transactions-in-a-loop
	*         3) http://php.net/manual/en/function.fgetcsv.php
	*        4) http://php.net/manual/en/mysqli-stmt.bind-param.php
	*        5) http://us2.php.net/mysqli_fetch_array
	*        6) http://stackoverflow.com/questions/2552545/mysqli-prepared-statements-error-reporting
	*        7) http://www.iconfinder.com
	*         8) http://www.mind-it.info/2009/10/02/transactions-prepared-statements-and-php-mysqli/
	*         
	*         1. An INSERT statement to insert the first row of the main import to config_itemi.
	*         2. SELECT LAST_INSERT_ID()
	*         3. Last_insert_ID stored and used to insert into citype_genhdw.
	*         4. Go back to step 1 and begin on row 2.
	*/
	$pagetitle = "Executing import..";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
			
	#Determine what CSV file was selected
	if(isset($_GET['csv']))        {
					$csv = $_GET['csv'] . ".csv";
	}
	else        {
					$csv = "";
	}
	
	#Connect
	$mysqli = mysqli_connect("localhost", "root", "", "swdata");
	
	#SQL Query
	$tablename_cmdb	= "assets";
	$tablename_hdw  = "asset_details";
	$sql_cmdb       = "INSERT INTO $tablename_cmdb(impacted, deactivated, faulty, baseline, urgency_level, activebaseline, impact_level, manufacturer, hardware_type, serial_num, username, status_level, owner, active, comp_name, purchase_order_number, asset_tag, cmdb_status, purchase_date, warranty_expires_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$sql_hdw        = "INSERT INTO $tablename_hdw(id, serial, name, model, it_owner, it_admin, encryption_level) VALUES (?, ?, ?, ?, ?, ?, ?)";
	
	#Create the prepared statement
	$stmt_cmdb         = $mysqli->prepare($sql_cmdb);
	$stmt_hdw         = $mysqli->prepare($sql_hdw);
	
	#Error checking the prepared statement
	if ( false === $stmt_cmdb )        {
			die_and_display('<p class=die>Preparing the ASSET statement failed: ' . htmlspecialchars($mysqli->error) . "</p>");                
	}
	if ( false === $stmt_hdw )        {
			die_and_display('<p class=die>Preparing the HARDWARE statement failed: ' . htmlspecialchars($mysqli->error) . "</p>");                
	}
	
	#Initialise data
	$csvData = array("","","","","","","","","","","","","","","","","","","","","","","");
	$rows = 0;
	
	#Open a file handle for the CSV file
	if (($handle = fopen("csv/".$csv, "r")) !== FALSE) {
	
		#Loop through each value
		while (($csvData = fgetcsv ($handle, 1024, ",")) !== FALSE)        {
				
			#echo "0: " . $csvData[0] . "; 1:" . $csvData[1] . "; 2:" . $csvData[2] . "; 3:" . $csvData[3] . "; 4:" . $csvData[4] . "; 5:" . $csvData[5] . "; 6:" . $csvData[6] . "; 7:" . $csvData[7] . "; 8:" . $csvData[8] . "; 9:" . $csvData[9] . "; 10:" . $csvData[10] . "; 11:" . $csvData[11] . "; " . $csvData[12] . "; " . $csvData[13] . "; " . $csvData[14] . "; " . $csvData[15] . "; " . $csvData[16] . "; " . $csvData[17] . "; " . $csvData[18] . "; " . $csvData[19] . "; " . $csvData[20] . "; " . $csvData[21] . "; " . $csvData[22] . "; " . $csvData[23] . "; <br />";

			#Bind parameters to the query
			$bp_cmdb = $stmt_cmdb->bind_param('sssissssssssssssssii', $csvData[0], $csvData[1], $csvData[2], $csvData[3], $csvData[4], $csvData[5], $csvData[6], $csvData[7], $csvData[8], $csvData[9], $csvData[10], $csvData[11], $csvData[12], $csvData[13], $csvData[14], $csvData[15], $csvData[16], $csvData[17], $csvData[18], $csvData[19]);
			
			#Error checking for binded parameters
			if ( false === $bp_cmdb )        {
					die_and_display('Binding parameters for ASSETS failed: ' . htmlspecialchars($stmt_cmdb->error));
			}                        
			
			#Run the prepared statement
			$bp_cmdb = $stmt_cmdb->execute();        
			
			#Error checking the execution of the prepared statement
			if ( false === $bp_cmdb )        {
					die_and_display('<div id="alert"><a class="alert">Executing ASSET import failed: ' . htmlspecialchars($stmt_cmdb->error) . '</a></div>');
			}
			
			$rows++;
			
			#Find the ID's of each of our inserted values using the serial as the unique identifier
			#last_insert_id() is not 100% reliable as another INSERT may occur on the 'assets' table while we're running our script
			$query = "SELECT id FROM assets WHERE serial_num = '$csvData[9]'";
			$result = mysqli_query($mysqli, $query);
			$row = mysqli_fetch_array($result, MYSQLI_NUM);
			$id = $row[0];
			
			#id, serial, name, model, it_owner, it_admin, encryption_level
			$bp_hdw = $stmt_hdw->bind_param('issssss', $id, $csvData[9], $csvData[14], $csvData[20], $csvData[21], $csvData[22], $csvData[23]);
			
			#Error checking the execution of the prepared statement
			if ( false === $bp_hdw )        {
					die_and_display('<div id="alert"><a class="alert">Binding parameters for HARDWARE failed: ' . htmlspecialchars($stmt_hdw->error) . '</a></div>');
			}
			
			#Run the prepared statement
			$bp_hdw = $stmt_hdw->execute();
			
			#Error checking the execution of the prepared statement
			if ( false === $bp_hdw )        {
					die_and_display('<div id="alert"><a class="alert">Executing HARDWARE import failed: ' . htmlspecialchars($stmt_hdw->error) . '</a></div>');
			}
			
			#Free the result set
			$result->free();                        
			
		}
	
	}
	
	#Close open connections
	$stmt_cmdb->close();
	$stmt_hdw->close();
	fclose($handle);
	
	#Successful import, return to main page
	echo "<div id=\"successfulImport\"><img src=\"/automate/images/success.png\" /> <b>" . $rows . "</b> rows imported successfully.</div>";
	header("refresh:8; url=/automate/import");
	
	require_once("/../inc/footer.php"); 
	
?>