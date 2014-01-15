<?php
	
	/**
	* Display history of imports - Administrators only
	*/
	$pagetitle = "Asset Import History";
	include("layout/header.php");
	include("inc/functions.php");
	
	#checkLogin();
	
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
  </head>
  <body>
	
	<div id="container">
      <table cellpadding="0" cellspacing="0" border="1" class="hor-minimalist-a" id="contact">
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

	#Free the result
	mysqli_free_result($result);
	
	include("layout/footer.php");
?>