<?php

	/**
	* Sources:
	*
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

	echo "<hr><h3>Review contents before import</h3><hr>";
	
	#Loop through and print out each row
	if (($handle = fopen("csv/".$csv, "r")) !== FALSE) {	
		$row = 0;
		echo "<div id=importTableWrapper>";
		echo "<table width=100% border=1 id=hor-minimalist-a>";
		echo "<tr>
				<td>rows</td>
				<td>serial</td>
				<td>name</td>
				<td>asset</td>
				<td>mac</td>				
			</tr>";
		while (($data = fgetcsv ($handle, 1024, ",")) !== FALSE)	{
			#$num = the number of comma-separated values in a row
			$num = count($data);
			$row++;
			
			#Change row colour depending on how many rows it has (4 = good)
			for ($array_value = 0; $array_value < $num; $array_value++)	{
			
				if ($num == '4')	{
					$trclass = "valid";
				}
				else	{
					$trclass = "invalid";
				}
				
			}
			echo "<tr class=\"$trclass\">";
			echo "<td>[$num]</td>";
			
			for ($i = 0; $i < $num; $i++)	{
				echo "<td>$data[$i]</td>";
			}			
			echo "</tr>";			
		}
		echo "</table>";
		echo "<p>Rows: " . $row . "</p><br /></div>";
		fclose($handle);		
	}
	
	#Execute PHP import script
	echo "<br /><h2><a href=\"import_mdt_execute.php?csv=$csv\">>> Import values <<</a></h2><br />";	
	
	include("layout/footer.php");
	
?>