<?php
	
   /**
	* Scheduled_task_history.php 
	*
	* Administrators only
	* Display history of scheduled task creation by querying automate.scheduled_tasks
	*/
	
	$pagetitle = "Scheduled Task Creation History";
	
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
	$select = "SELECT name AS 'Name', jobdesc AS 'Grade', invoice AS 'Invoice', user AS 'User', timestamp AS 'Created', run_time AS 'Run At', schedule AS 'Schedule', start_date AS 'Start', end_date AS 'End' ";
	$from 	= "FROM  scheduled_tasks ";
	$order 	= "ORDER BY id DESC";
	$sql	= $select . $from . $order;
	
	$result = mysqli_query($connection, $sql);
	
?>

<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script type="text/javascript" language="javascript" src="http://localhost/automate/resources/js/jquery.js"></script>
    <script class="jsbin" src="http://localhost/automate/resources/js/jquery.dataTables.nightly.js"></script>
	<script type="text/javascript" charset="utf-8">
		/* 
		 * Filter data using text boxes 
		 * Reference: http://datatables.net/examples/api/multi_filter.html
		 */
		var asInitVals = new Array();
			
			$(document).ready(function() {
				var oTable = $('#task-history').dataTable( {
					"oLanguage": {
						"sSearch": "Search:"
					},
					"iDisplayLength": 50
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
				
				/* Alterate the color of the rows */
				$("tr:even").css("background-color", "#CEE8F0");
			} );
	</script>
  </head>
  <body>
	
	<div id="container">
		<h3>Scheduled Tasks History</h3>
		<br />
		<table cellpadding="0" cellspacing="0" border="1" class="hor-minimalist-a" id="task-history">
			<thead>
				<tr>
					<th>Name</th>
					<th>Grade</th>
					<th>Invoice</th>
					<th>User</th>
					<th>Created</th>
					<th>Run At</th>
					<th>Schedule</th>
					<th>Start</th>
					<th>End</th>
				</tr>
			</thead>
			<tbody>
          
<?php
	
		#Loop and print contents of SQL query
		while($row = mysqli_fetch_array($result))	{
		
			echo "<tr>";
			echo "<td>" . $row['Name'] . "</td>";
			echo "<td>" . $row['Grade'] . "</td>";
			echo "<td>" . $row['Invoice'] . "</td>";
			echo "<td>" . $row['User'] . "</td>";
			echo "<td>" . $row['Created'] . "</td>";						
			echo "<td>" . $row['Run At'] . "</td>";
			echo "<td>" . $row['Schedule'] . "</td>";
			echo "<td>" . $row['Start'] . "</td>";
			echo "<td>" . $row['End'] . "</td>";
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