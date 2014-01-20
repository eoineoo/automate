<?php
	
	/**
	* Display details of selected lease. Contact outstanding users.
	*/
	$pagetitle = "View Lease Detail";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
	
	#Determine what invoice file was selected
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
	$sselect = "SELECT purchase_order_number AS 'Invoice', FROM_UNIXTIME(purchase_date, \"%d %M %Y\") AS 'Purchased', FROM_UNIXTIME(warranty_expires_date, \"%d %M %Y\") AS 'ReturnOn', COUNT(model) AS 'Units', model ";
	$sfrom = "FROM assets ";
	$sjoin = "JOIN asset_details ON asset_details.id = assets.id AND purchase_order_number = '$invoice' ";
	$sgroup = "GROUP BY model ";
	$sorder = "ORDER BY purchase_order_number DESC";
	$ssql = $sselect . $sfrom . $sjoin . $sgroup . $sorder;
	
	#Main Query - multiple databases
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
	
	#Counters
	$completed = 0;
	$logged = 0;
	$outstanding = 0;
	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script type="text/javascript" language="javascript" src="../resources/jquery.js"></script>
    <script class="jsbin" src="../resources/jquery.dataTables.nightly.js"></script>
	<script type="text/javascript" charset="utf-8">
		/* 
		 * Filter data using text boxes 
		 * http://datatables.net/examples/api/multi_filter.html
		 */
		var asInitVals = new Array();
			
			$(document).ready(function() {
				var oTable = $('#assets').dataTable( {
					"oLanguage": {
						"sSearch": "Search:"
					},
					"bPaginate": false
				} );
				
				$("thead input").keyup( function () {
					/* Filter on the column (the index) of this element */
					oTable.fnFilter( this.value, $("thead input").index(this) );
				} );
				
				
				/*
				 * Support functions to provide a little bit of 'user friendlyness' to the textboxes in 
				 * the footer
				 */
				$("thead input").each( function (i) {
					asInitVals[i] = this.value;
				} );
				
				$("thead input").blur( function (i) {
					if ( this.value == "" )
					{
						this.value = asInitVals[$("thead input").index(this)];
					}
				} );
			} );
	</script>
  </head>
  <body>
	
	<!-- Control panel -->
	<table id='hor-minimalist-a' border='1'>
		<thead>
			<tr>
				<th colspan="4">Control Panel</th>
			</tr>
			<tr>
				<?php 
					echo "<td width=\"25%\"><a href='$invoice/summary'>Lease Summary</a></td>";
					echo "<td width=\"25%\"><a href='$invoice/schedule' target=_blank>Create Scheduled Task</td>";
					echo "<td width=\"25%\"><a href='$invoice/contact' target=_blank>Mail Outstanding Users</a></td>";
					echo "<td width=\"25%\"><a href='$invoice/history-all' target=_blank>View Contact History</a></td>"; 
				?>
			</tr>
		</thead>
	</table>
	<br />
	
	<div id="container">
      <table cellpadding="0" cellspacing="0" border="1" class="hor-minimalist-a" id="assets">
        <thead>
			<tr>
				<th><input type="text" name="search_serial" size="10"/></th>
				<th><input type="text" name="search_logon" size="10"/></th>
				<th><input type="text" name="search_user" size="10"/></th>
				<th><input type="text" name="search_owner" size="10"/></th>
				<th><input type="text" name="search_status" size="10"/></th>
				<th><input type="text" name="search_model" size="10"/></th>
				<th><input type="text" name="search_call_ref" size="10"/></th>
				<th><input type="text" name="search_mailed" size="10"/></th>				
				<th><input type="text" name="search_history" size="10"/></th>				
			</tr>
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
			echo "<td>" . $row['Last User'] . "</td>";
			echo "<td>" . $row['Assigned To'] . "</td>";
			echo "<td>" . $row['Status'] . "</td>";		
			echo "<td>" . $row['Model'] . "</td>";		
			echo "<td>" . $row['Call Ref'] . "</td>";
			echo "<td>" . $row['Last Email'] . "</td>";
			echo "<td><a href=javascript:window.open('/automate/assets/lease/" .$row['Serial'] . "/history','Contact%20History','width=1024,height=450')><img src=\"..\\..\\images\\log.png\" /></a></td>";
					
		}
?>
		<body>
      </table>
    </div>

<?php

	#Numbers - add CSS
	echo "<p>Completed: $completed <br />Logged: $logged <br /> Outstanding: $outstanding</p>";
	echo "<br />";

	#Free the result
	mysqli_free_result($result);
	
	require_once("/../inc/footer.php");
?>