<?php

	/**
	* Search for assets
	*/
	require_once("/../inc/config.php");  
	require_once("/../inc/functions.php");
	
	#Connect
	$connection = mysqli_connect("localhost", "root", "", "swdata");
	
	#Check connection
	if (mysqli_connect_errno())	{
		die_and_display('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
	}
	
	#Variables
	if(isset($_POST['assetTag']))	{
		$assetTag  = $_POST['assetTag'];
		$serialNumber = "";
		$owner = "";
	}
	else if(isset($_POST['serialNumber']))	{
		$assetTag = "";
		$serialNumber	= $_POST['serialNumber'];
		$owner = "";
	}
	else if(isset($_POST['owner']))	{
		$assetTag  = "";
		$serialNumber = "";
		$owner = $_POST['owner'];
	}
	else	{
		$asset_tag  = "";
		$serial = "";
		$owner = "";
	}
		
	$select		=  	"SELECT DISTINCT(serial_num) AS 'Serial', asset_tag  AS 'Asset Tag', last_logon AS 'Last Logon', username AS 'Last User', owner AS 'Assigned To', status_level AS 'Status' ";
	$from		= 	"FROM assets a ";
	$join		= 	"LEFT OUTER JOIN asset_details a_d ON a_d.id = a.id ";
	$w_asset 	= 	"WHERE asset_tag LIKE '%$assetTag%' ";	
	$w_serial	= 	"AND (serial_num LIKE '%$serialNumber%') ";
	$w_owner	= 	"AND (owner LIKE '%$owner%') ";
	$group		= 	"GROUP BY serial_num";
	$sql		= 	$select . $from . $join . $w_asset . $w_serial . $w_owner . $group;
	
	$result = mysqli_query($connection, $sql);
	
	if($_POST['action'] == 'insert'){
		echo $sql;
?>
	
	<table cellpadding="0" cellspacing="0" border="1" class="hor-minimalist-a"> 
		<thead>
			 <tr>
			<th>Serial</th>
				<th>Asset Tag</th>
				<th>Last Logon</th>
				<th>Last User</th>
				<th>Assigned To</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody> 

<?php

		#echo "<table>";
		#Loop and print contents of SQL query
		while($row = mysqli_fetch_array($result))	{
		
			echo "<tr>";
			echo "<td>" . $row['Serial'] . "</td>";
			echo "<td>" . $row['Asset Tag'] . "</td>";
			echo "<td>" . $row['Last Logon'] . "</td>";
			echo "<td>" . $row['Last User'] . "</td>";
			echo "<td>" . $row['Assigned To'] . "</td>";
			echo "<td>" . $row['Status'] . "</td>";
			echo "</tr>";
		}
		
		echo "</table>";

	mysqli_free_result($result);
		
	}	

?>



























