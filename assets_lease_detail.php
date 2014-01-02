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
	
	#Query - Need to include last email time from automate.contact
	$select		=  	"SELECT DISTINCT(serial_num) AS 'Serial', last_logon AS 'Last Logon', username AS 'Last User', a.owner AS 'Assigned To', status_level AS 'Status', model as 'Model', callref as 'Call Ref', MAX(timestamp) AS 'Last Email' ";
	$from		= 	"FROM swdata.assets a ";
	$join_a		= 	"LEFT OUTER JOIN asset_details a_d ON a_d.id = a.id ";
	$join_o		= 	"LEFT OUTER JOIN swdata.opencall o ON o.cust_name = a.owner ";
	$join_c		= 	"LEFT OUTER JOIN automate.contact c ON c.serial = a.serial_num ";
	$where		= 	"WHERE a.purchase_order_number = $invoice ";
	$group		= 	"GROUP BY serial_num";
	$sql		= 	$select . $from . $join_a . $join_o . $join_c . $where . $group;
	
	$result = mysqli_query($connection, $sql);
	$row_count = mysqli_num_rows($result);
	
	#Control panel
	echo "<table id='hor-minimalist-a' border='1'><tr><th colspan=4>Control Panel</th></tr><tr><td><a href='assets_lease_task.php'>Mail Outstanding Users</a></td><td>View Contact History</td></tr></table>";
	echo "<br />";

	#Counters
	$completed = 0;
	$logged = 0;
	$outstanding = 0;
	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script type="text/javascript" language="javascript" src="scripts/jquery.js"></script>
    <script class="jsbin" src="scripts/jquery.dataTables.nightly.js"></script>	
  </head>
  <body>
    <div id="container">
      <table cellpadding="0" cellspacing="0" border="1" class="hor-minimalist-a" id="assets">
        <thead>
          <tr>
            <th>Serial</th>
            <th>Last Logon</th>
            <th>Last User</th>
            <th>Assigned To</th>
            <th>Status</th>
			<th>Model</th>
			<th>Call Ref</th>
			<th>Last Mailed</th>
			<th>History</th>
          </tr>
        </thead>
        <tbody>
          
<?php
	
		#Loop and print contents of SQL query
		while($row = mysqli_fetch_array($result))	{
		
			#Highlight row rules
			if (($row['Assigned To'] == 'Returned') && ($row['Status'] == 'Unassigned')) {
				$trclass = "row_call_completed";
				$completed++;
			}
			else if (($row['Call Ref'] != NULL)	|| ($row['Status'] == 'Unassigned')) {
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
			echo "<td>" . $row['Last Email'] . "</td>";
			#echo "<td><a href=\"assets_contact_history.php?uid=" . urlencode($row['Last User']) . "\"><img src=\"images\\log.png\" /></a></td>";
			echo "<td><a href=\"assets_test.php?uid=" . urlencode('test') . "\"><img src=\"images\\log.png\" /></a></td>";
		
		}
?>
		  
        </tbody>
      </table>
    </div>
  <script>  
/* 
 * Initialise the DataTable, removing pagination
 */
$(document).ready(function(){
	$('#assets').dataTable(	{
		"bPaginate": false
	});
});
</script>
<?php

	#Numbers - add CSS
	echo "<p>Completed: $completed <br />Logged: $logged <br /> Outstanding: $outstanding</p>";
	echo "<br />";

	#Free the result
	mysqli_free_result($result);
	
	include("layout/footer.php");
?>