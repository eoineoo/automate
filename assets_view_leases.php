<?php
	
	/**
	* Basic HTML form that sends file to uploader.php
	*/
	$pagetitle = "View Lease Agreements";
	include("layout/header.php");
	include("inc/functions.php");
	
	#Connect
	$connection = mysqli_connect("localhost", "root", "", "swdata");
	
	#Check connection
	if ($connection->connect_errno) {
		die_and_display('<p class=die>Preparing the ASSET statement failed: ' . htmlspecialchars($connection->connect_error) . "</p>");			
	}
	
	#Query
	$select		=  	"SELECT purchase_order_number AS 'Invoice', model AS 'Model', FROM_UNIXTIME(purchase_date, \"%d %M %Y\") AS 'Purchased', FROM_UNIXTIME(warranty_expires_date, \"%d %M %Y\") AS 'ReturnOn', COUNT(model) AS 'Units' ";
	$from		= 	"FROM assets ";
	$join		= 	"LEFT OUTER JOIN asset_details ON asset_details.id = assets.id ";
	$group		= 	"GROUP BY model";
	$sql		= 	$select . $from . $join . $group;
	#echo "Query: <b>" . $sql . "</b>";

	$result = mysqli_query($connection, $sql);

	$data = array();
	
	while ($row = mysqli_fetch_assoc($result))	{
	
		$data[] = $row;
	
	}
	
	colNames = array_keys(reset($data));
	
	?>
	<table border="1">
 <tr>
    <?php
       //print the header
       foreach($colNames as $colName)
       {
          echo "<th>$colName</th>";
       }
    ?>
 </tr>

    <?php
       //print the rows
       foreach($data as $row)
       {
          echo "<tr>";
          foreach($colNames as $colName)
          {
             echo "<td>".$row[$colName]."</td>";
          }
          echo "</tr>";
       }
    ?>
 </table>
	
	mysqli_free_result($result);
	
	include("layout/footer.php");
?>	