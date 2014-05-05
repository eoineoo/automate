<?php
	
	/**
	* View_leases.php
	* 
	* Display overview of all current leases by querying swdata.assets
	*/
	
	$pagetitle = "View Lease Agreements";
	
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
	
	checkLogin();
	
	#Connect
	$connection = mysqli_connect("localhost", "root", "", "swdata");
	
	#Check connection
	if (mysqli_connect_errno())	{
		die_and_display('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
	}
	
	#Query
	$select		=  	"SELECT purchase_order_number AS 'Invoice', FROM_UNIXTIME(purchase_date, \"%d %M %Y\") AS 'Purchased', FROM_UNIXTIME(warranty_expires_date, \"%d %M %Y\") AS 'ReturnOn', COUNT(model) AS 'Units' ";
	$from		= 	"FROM assets ";
	$join		= 	"LEFT OUTER JOIN asset_details ON asset_details.id = assets.id ";
	$group		= 	"GROUP BY purchase_order_number ";
	$order		=	"ORDER BY purchase_order_number DESC";
	$sql		= 	$select . $from . $join . $group . $order;
	
	$result = mysqli_query($connection, $sql);

	echo 	"<table id='hor-minimalist-a' border='1'>
			<tr>";
		
	echo	"<th>Invoice</th>
			<th>Purchased</th>
			<th>Return On</th>
			<th>Units</th>
			</tr>";
	
	$counter = 0;
	
	while($row = mysqli_fetch_array($result))	{
		
		echo "<tr>";
		echo "<td><a href = lease/" . $row['Invoice'] . ">" . $row['Invoice'] . "</a></td>";
		echo "<td>" . $row['Purchased'] . "</td>";
		echo "<td>" . $row['ReturnOn'] . "</td>";
		echo "<td>" . $row['Units'] . "</td>";		
	
	}
	echo "</tr></table>";
	
	mysqli_free_result($result);
	
	require_once("/../inc/footer.php");
?>