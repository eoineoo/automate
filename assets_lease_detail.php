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
	$select		=  	"SELECT serial_num AS 'Serial', last_logon AS 'Last Logon', username AS 'Last User', owner AS 'Assigned To', status_level AS 'Status', model as 'Model', callref as 'Call Ref' ";
	$from		= 	"FROM assets ";
	$join_a		= 	"LEFT OUTER JOIN asset_details ON asset_details.id = assets.id ";
	$join_o		= 	"LEFT OUTER JOIN opencall ON opencall.cust_name = assets.owner ";
	$where		= 	"WHERE purchase_order_number = $invoice ";
	$order		=	"ORDER BY last_logon ASC"; #doesn't work because of data type
	$sql		= 	$select . $from . $join_a . $join_o . $where;
	echo $sql;
	
	$result = mysqli_query($connection, $sql);
	$row_count = mysqli_num_rows($result);
	
	#Control panel
	echo "<table id='hor-minimalist-a' border='1'><tr><td>aaa</td><td>aaa</td><td>aaa</td><td>aaa</td></tr></table>";
	echo "<br />";
	
	#Create table of assets
	echo 	"<table id='hor-minimalist-a' border='1'>
			<tr>";
	
	#Print table headers
	echo	"<th>Serial</th>
			<th>Last Logon</th>
			<th>Last User</th>
			<th>Assigned To</th>
			<th>Status</th>
			<th>Model</th>
			<th>Call Ref</th>
			<th>Last Email</th>
			
			</tr>";
	
	$logged = 0;
	$outstanding = 0;
	
	#Loop and print contents of SQL query
	while($row = mysqli_fetch_array($result))	{
		
		#Highlight row rules
		if (($row['Call Ref'] != NULL)	|| ($row['Status'] == 'Unassigned')) {
			$trclass = "row_call_logged";
			$logged++;
		}
		else	{
			$trclass = "row_call_not_logged";	
			$outstanding++;
		}
		
		echo "<tr class = $trclass>";
		echo "<td>" . $row['Serial'] . "</td>";
		echo "<td>" . $row['Last Logon'] . "</td>";
		#For now the 'Last User' is just pulling the last logged-on user field from the username field in the asset database but in the live system it's populated by WMI/SCCM (out of the scope of this project)
		echo "<td>" . $row['Last User'] . "</td>";
		echo "<td>" . $row['Assigned To'] . "</td>";
		echo "<td>" . $row['Status'] . "</td>";		
		echo "<td>" . $row['Model'] . "</td>";		
		echo "<td>" . $row['Call Ref'] . "</td>";
		echo "<td><<>></td>";
	
	}
	echo "</tr></table>";
	
	#Numbers
	echo "<p>Total: $row_count <br />Logged: $logged <br /> Outstanding: $outstanding</p>";
	echo "<br />";
	
	#Free the result
	mysqli_free_result($result);
	
	include("layout/footer.php");
?>