<?php

	/**
	* Sources:
	*	1) http://php.net/manual/en/function.fgetcsv.php
	* 
	* 	1. Display contents of CSV file for purpose of visual validation
	*/
	$pagetitle = "Automate - Import Using Loop";
	include("layout/header.php");
	
	#Determine what CSV file was selected
	if(isset($_GET['csv']))	{
			$csv = $_GET['csv'];		
	}
	else	{
			$csv = "test.csv";
	}

	#echo "<p>Selected file: " . $csv . "</p>";
	
	echo "<hr><h3>Review contents before import</h3><hr>";
	
	#loop through and print out each row
	if (($handle = fopen("csv/".$csv, "r")) !== FALSE) {	
		$row = 0;
		echo "<table width=100% border=1 id=hor-minimalist-a>";
		while (($data = fgetcsv ($handle, 1024, ",")) !== FALSE)	{
			#$num = the number of comma-separated values in a row
			$num = count($data);
			#echo "<p>$num fields in row $row</p>";
			$row++;
			
			#Change row colour depending on how many rows it has (20 = good)
			for ($array_value = 0; $array_value < $num; $array_value++)	{
			
				#if (($num == '20') && ($data[$array_value] != '7P49'))	{
				if ($num == '20')	{
					$trclass = "valid";
				}
				else	{
					$trclass = "invalid";
				}
				
			}
			echo "<tr class=\"$trclass\">";
			echo "<td>$num</td>";
			
			for ($i = 0; $i < $num; $i++)	{
				echo "<td>$data[$i]</td>";
			}			
			echo "</tr>";			
		}
		echo "</table>";
		echo "<p>Rows: " . $row . "</p><br />";
		fclose($handle);		
	}
	
	#Execute MySQL import script: Importer.py
	echo "<p><a href=\"import_import.php?csv=$csv\">Import PHP script.</a></p><br />";
	echo "<p><a href=\"import_execute.php?csv=$csv\">Import using Python script.</a></p><br />";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	include("layout/footer.php");
	
?>