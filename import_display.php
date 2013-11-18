<?php

	/**
	* Sources:
	* 	1) http://stackoverflow.com/questions/5593473/how-to-upload-and-parse-a-csv-file-in-php
	* Displays the contents of the uploaded CSV file
	*/
	$pagetitle = "Display File";
	include("layout/header.php");
	
	$directory 	= 'csv';
		
	#Display files in /csv directory
	echo "Available Files: ";
	#Remove "." and ".."
	$files = array_diff(scandir($directory), array('..', '.')); 
	foreach ($files as &$value)	{
		echo  "<a href=import_display.php?csv=$value>$value</a> | ";		
	}	

	echo "<hr /><hr />";

	#Determine what CSV file was selected
	if(isset($_GET['csv']))	{
			$csv = $_GET['csv'];		
	}
	else	{
			$csv = "test.csv";
	}

	echo "Selected file: " . $csv;
	#Read selected CSV file, open it and print out each line	
	if (($handle = fopen("csv/".$csv, "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$row = 1;
			$num = count($data);
			echo "<p> $num fields in line $row: <br /></p>\n";
			$row++;
			for ($c=0; $c < $num; $c++) {
				echo $data[$c] . ", \n";
			}
		}
		fclose($handle);
	}
	
	#Execute MySQL import script: Importer.py
	echo "<p><a href=\"import_execute.php?csv=$csv\">Click here to perform the import.</a></p>";
	
	include("layout/footer.php");
?>