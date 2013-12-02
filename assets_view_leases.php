<?php
	
	/**
	* 
	*/
	$pagetitle = "View Lease Agreements";
	include("layout/header.php");
	include("inc/functions.php");
	
?>

<!-- http://www.javascripttoolbox.com/jquery/ -->
<script>
$(function() {
	$('tr.parent')
		.css("cursor","pointer")
		.attr("title","Click to expand/collapse")
		.click(function(){
			$(this).siblings('.child-'+this.id).toggle();
		});
	$('tr[@class^=child-]').hide().children('td');
});</script>

<?php
	
	#Connect
	$connection = mysqli_connect("localhost", "root", "", "swdata");
	
	#Check connection
	if ($connection->connect_errno) {
		die_and_display('<p class=die>Connection failed: ' . htmlspecialchars($connection->connect_error) . "</p>");			
	}
	
	#Query
	$select		=  	"SELECT purchase_order_number AS 'Invoice', FROM_UNIXTIME(purchase_date, \"%d %M %Y\") AS 'Purchased', FROM_UNIXTIME(warranty_expires_date, \"%d %M %Y\") AS 'ReturnOn', COUNT(model) AS 'Units' ";
	$from		= 	"FROM assets ";
	$join		= 	"LEFT OUTER JOIN asset_details ON asset_details.id = assets.id ";
	$group		= 	"GROUP BY purchase_order_number ";
	$order		=	"ORDER BY purchase_order_number DESC";
	$sql		= 	$select . $from . $join . $group . $order;
	
	$sql_new	= "SELECT model AS  'Model', COUNT( model ) AS 'Count' FROM assets LEFT OUTER JOIN asset_details ON asset_details.id = assets.id GROUP BY model";
	
	$result = mysqli_query($connection, $sql);
	$result_new = mysqli_query($connection, $sql_new);

	echo 	"<table id='hor-minimalist-a' border='1'>
			<tr>";
		
	echo	"<th>Invoice</th>
			<th>Purchased</th>
			<th>Return On</th>
			<th>Units</th>
			</tr>";
	
	$counter = 0;
	
	while($row = mysqli_fetch_array($result))	{
		
		echo "<tr class=\"parent\" id=\"$counter\">";
		echo "<td>" . $row['Invoice'] . "</td>";
		echo "<td>" . $row['Purchased'] . "</td>";
		echo "<td>" . $row['ReturnOn'] . "</td>";
		echo "<td>" . $row['Units'] . "</td>";		
		echo "</tr>";
			
		while($row_new = mysqli_fetch_array($result_new))	{
		
			echo "<tr style=\"display: none;\" class=\"child-$counter\">";
			echo "<td>Counter: $counter</td>";
			echo "<td>" . $row_new['Model'] . "</td>";
			echo "<td>" . $row_new['Count'] . "</td>";
			echo "<td>aaaaaaaa</td>";
			echo "</tr>";
		
		}
		
		$counter++;
	
	}
	echo "</table>";
	
	mysqli_free_result($result);
	
	include("layout/footer.php");
?>