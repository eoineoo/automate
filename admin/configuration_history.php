<?php
	
   /**
	* Configuration_history.php
	*
	* Administrators only
	* Display history of laptop configurations by querying automate.config
	*/
	
	$pagetitle = "Laptop Configuration History";
	
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
	
	checkAdminLogin();
	
	#Connect
	$connection = mysqli_connect("localhost", "root", "", "automate");
	
	#Check connection
	if (mysqli_connect_errno())	{
		die_and_display('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
	}
	
	#Query to return csv_details
	$select = "SELECT user AS 'User', end_user AS 'End User', machine_name AS 'Machine', applications AS 'Applications', timestamp AS 'Time' ";
	$from 	= "FROM  config ";
	$order 	= "ORDER BY id DESC";
	$sql	= $select . $from . $order;
	
	$result = mysqli_query($connection, $sql);
	
?>

    <script type="text/javascript" language="javascript" src="http://localhost/automate/resources/js/jquery.js"></script>
    <script class="jsbin" src="http://localhost/automate/resources/js/jquery.dataTables.nightly.js"></script>
	<script type="text/javascript" charset="utf-8">		
		/* 
		 * Filter data using text boxes 
		 * Reference: http://datatables.net/examples/api/multi_filter.html
		 */
		var asInitVals = new Array();
			
			$(document).ready(function() {
				var oTable = $('#configurations').dataTable( {
					"oLanguage": {
						"sSearch": "Search:"
					},
					"bPaginate": false
				} );
				
				$("thead input").keyup( function () {
					/* Filter on the column (the index) of this element */
					oTable.fnFilter( this.value, $("thead input").index(this) );
				} );
				
				$("thead input").each( function (i) {
					asInitVals[i] = this.value;
				} );
				
				$("thead input").blur( function (i) {
					if ( this.value == "" )
					{
						this.value = asInitVals[$("thead input").index(this)];
					}
				} );
				/* Alterate the color of the rows */
				$("tr:even").css("background-color", "#CEE8F0");
			} );
	</script>

<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  </head>
  <body>
	
	<div id="container">
		<h3>Scheduled Tasks History</h3>
		<br />
		<table cellpadding="0" cellspacing="0" border="1" class="hor-minimalist-a" id="configurations">
			<thead>
				<tr>
					<!-- Input for filtering (DataTables) -->
					<th><input type="text" name="search_user" style='width:100%'/></th>
					<th><input type="text" name="search_enduser" style='width:100%'/></th>
					<th><input type="text" name="search_machine" style='width:100%'/></th>
					<th><input type="text" name="search_applications" style='width:100%'/></th>
					<th><input type="text" name="search_time" /></th>				
				</tr>
				<tr>
					<th>User (IT)</th>
					<th>End User</th>
					<th>Machine</th>
					<th>Applications</th>
					<th>Time</th>					
				</tr>
			</thead>
			<tbody>
          
<?php
	
		#Loop and print contents of SQL query
		while($row = mysqli_fetch_array($result))	{
		
			echo "<tr>";
			echo "<td>" . $row['User'] . "</td>";
			echo "<td>" . $row['End User'] . "</td>";
			echo "<td>" . $row['Machine'] . "</td>";
			echo "<td>" . $row['Applications'] . "</td>";
			echo "<td>" . $row['Time'] . "</td>";									
			echo "</tr>";
		}
?>
		<body>
      </table>
	  <div id="spacer">&nbsp;</div>
    </div>

<?php

	mysqli_free_result($result);
	
	require_once("/../inc/footer.php");  
?>