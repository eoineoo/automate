<?php
	
   /**
	* Import_history.php
	* 
	* Administrators only
	* Display history of data imports by querying automate.csv_details
	*/
	
	$pagetitle = "Asset Import History";
	
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
	$select = "SELECT id, db_name AS 'Database', orig_name AS 'File Name', new_name AS 'System Name', timestamp AS 'Time', user AS 'Uploader', num_entries AS 'Total',  description AS 'Comments' ";
	$from 	= "FROM  csv_details ";
	$order 	= "ORDER BY id DESC";
	$sql	= $select . $from . $order;
	
	$result = mysqli_query($connection, $sql);
	
?>

<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script type="text/javascript" language="javascript" src="http://localhost/automate/resources/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="http://localhost/automate/inc/dataTables.css">
    <script class="jsbin" src="http://localhost/automate/resources/js/jquery.dataTables.nightly.js"></script>
	<script type="text/javascript" charset="utf-8">
		/* 
		 * Filter data using text boxes 
		 * Reference: http://datatables.net/examples/api/multi_filter.	
		 */
		var asInitVals = new Array();
			
			$(document).ready(function() {
				var oTable = $('#import-history').dataTable( {
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
      <table cellpadding="0" cellspacing="0" border="1" class="hor-minimalist-a" id="import-history">
        <thead>
			<tr>
				<th>Time</th>
				<th>Database</th>
				<th>Comments</th>
				<th>Uploader</th>
				<th>File Name</th>
				<th>Total</th>
			</tr>
        </thead>
        <tbody>
          
<?php
	
		#Loop and print contents of SQL query
		while($row = mysqli_fetch_array($result))	{
		
			echo "<tr>";
			echo "<td>" . $row['Time'] . "</td>";
			echo "<td>" . $row['Database'] . "</td>";
			echo "<td>" . $row['Comments'] . "</td>";
			echo "<td>" . $row['Uploader'] . "</td>";
			echo "<td>" . $row['File Name'] . "</td>";						
			echo "<td>" . $row['Total'] . "</td>";
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