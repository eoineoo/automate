<?php
	
	/**
	* Display details of selected lease.
	*/
	$pagetitle = "View Lease Detail";
	include("layout/header.php");
	include("inc/functions.php");
	
	#Determine what invoice file was selected
	if(isset($_GET['invoice']))	{
			$invoice = $_GET['invoice'];		
	}
	else	{
			$csv = "";
	}
	
	#Connect
	$connection = mysqli_connect("localhost", "root", "", "swdata");
	
	#Check connection
	if (mysqli_connect_errno())	{
		die_and_display('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
	}
	
	#Query
	$select		=  	"SELECT serial_num AS 'Serial', owner AS 'Assigned To', cmdb_status AS 'Status', model as 'Model', last_logon AS 'Last Logon' ";
	$from		= 	"FROM assets ";
	$join		= 	"LEFT OUTER JOIN asset_details ON asset_details.id = assets.id ";
	$where		= 	"WHERE purchase_order_number = $invoice ";
	$order		=	"ORDER BY last_logon ASC"; #doesn't work
	$sql		= 	$select . $from . $join . $where;
	
	$result = mysqli_query($connection, $sql);

	echo 	"<table id='hor-minimalist-a' border='1'>
			<tr>";
		
	echo	"<th>Serial</th>
			<th>Assigned To</th>
			<th>Status</th>
			<th>Model</th>
			<th>Last Logon</th>
			</tr>";
	
	$counter = 0;
	
	while($row = mysqli_fetch_array($result))	{
		
		echo "<tr>";
		echo "<td>" . $row['Serial'] . "</td>";
		echo "<td>" . $row['Assigned To'] . "</td>";
		echo "<td>" . $row['Status'] . "</td>";		
		echo "<td>" . $row['Model'] . "</td>";		
		echo "<td>" . $row['Last Logon'] . "</td>";		
	
	}
	echo "</tr></table>";
	
	mysqli_free_result($result);
	
	include("layout/footer.php");
?>