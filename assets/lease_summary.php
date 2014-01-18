<?php
	
	/**
	* Display summary of current lease
	* Ideally this will involve simple JavaScript to display a slider or some other drop-down menu
	*/
	$pagetitle = "View Lease Summary";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
	
	#Determine what serial was selected
	if(isset($_GET['invoice']))	{
			$invoice = $_GET['invoice'];		
	}
	else	{
			$invoice = "";
	}
	
	#Connect
	$connection = mysqli_connect("localhost", "root", "", "swdata");
	
	#Check connection
	if (mysqli_connect_errno())	{
		die_and_display('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
	}
	
	#Summary screen query - Needs to be done
	$select = "SELECT purchase_order_number AS 'Invoice', FROM_UNIXTIME(purchase_date, \"%d %M %Y\") AS 'Purchased', FROM_UNIXTIME(warranty_expires_date, \"%d %M %Y\") AS 'ReturnOn', COUNT(model) AS 'Units', model ";
	$from 	= "FROM assets ";
	$join 	= "JOIN asset_details ON asset_details.id = assets.id AND purchase_order_number = '$invoice' ";
	$group 	= "GROUP BY model ";
	$order 	= "ORDER BY purchase_order_number DESC";
	$sql 	= $select . $from . $join . $group . $order;
	
	$result = mysqli_query($connection, $sql);
	
?>

<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  </head>
  <body>
	
	<div id="container">
      <table cellpadding="0" cellspacing="0" border="1" class="hor-minimalist-a" id="contact">
        <thead>
			<tr>
				<th>Invoice</th>
				<th>Purchased</th>
				<th>ReturnOn</th>
				<th>Units</th>
			</tr>
        </thead>
        <tbody>
          
<?php
	
		#Loop and print contents of SQL query
		while($row = mysqli_fetch_array($result))	{
		
			echo "<tr>";
			echo "<td>" . $row['Invoice'] . "</td>";
			echo "<td>" . $row['Purchased'] . "</td>";
			echo "<td>" . $row['ReturnOn'] . "</td>";
			echo "<td>" . $row['Units'] . "</td>";
			echo "</tr>";
		}
?>
		<body>
      </table>
    </div>

<?php

	mysqli_free_result($result);
	
	require_once("/../inc/footer.php");
?>