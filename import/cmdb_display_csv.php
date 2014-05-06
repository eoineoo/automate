<?php

   /**
	* CMDB_display_csv.php
	*
	* Referenced tutorials and sources:
	* 	1) http://www.php.net/manual/en/function.fopen.php
	*	2) http://php.net/manual/en/function.fgetcsv.php
	*
	* Display contents of CSV file in a HTML table (visual validation of file contents)
	*
	* Get CSV file and loop through each row using PHP's fopen() function 
	* Display each item in the row using the fgetcsv() function
	* Highlight rows depending on number of columns
	*/
	
	$pagetitle = "Automate - Import Using Loop";
	
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php"); ; 
	require_once("/../inc/functions.php");
	
	checkLogin();
	
	#Determine what CSV file was selected
	if(isset($_GET['csv']))	{
			$csv = $_GET['csv'] . ".csv";
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
				<td>Rows</td>
				<td>impacted</td>
				<td>deactivated</td>
				<td>faulty</td>
				<td>baseline</td>
				<td>urgency_level</td>
				<td>activebaseline</td>
				<td>impact_level</td>
				<td>manufacturer</td>
				<td>hardware_type</td>
				<td>serial_num</td>
				<td>username</td>
				<td>status_level</td>
				<td>owner</td>
				<td>active</td>
				<td>comp_name</td>
				<td>purchase_order_number</td>
				<td>asset_tag</td>
				<td>status</td>
				<td>purchase_date</td>
				<td>warranty_expires_date</td>
				<td>model</td>
				<td>it_owner</td>
				<td>it_admin</td>
				<td>encryption_level</td>				
			</tr>";
		while (($data = fgetcsv ($handle, 1024, ",")) !== FALSE)	{
			#$num = the number of comma-separated values in a row
			$num = count($data);
			$row++;
			
			#Change row colour depending on how many rows it has (24 = good)
			for ($array_value = 0; $array_value < $num; $array_value++)	{
			
				if ($num == '24')	{
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
	echo "<br /><h2><a href=\"../execute/$csv\">>> Import values <<</a></h2><br />";	
	
	require_once("/../inc/footer.php");
	
?>