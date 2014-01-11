<?php
	
	/**
	* Display history of mails sent to owner(s) of specific asset
	*/
	$pagetitle = "View Lease Detail";
	include("layout/header.php");
	include("inc/functions.php");
	
	#Determine what serial was selected
	if(isset($_GET['serial']))	{
			$serial = $_GET['serial'];		
	}
	else	{
			$serial = "";
	}
	
	#Connect
	$connection = mysqli_connect("localhost", "root", "", "automate");
	
	#Check connection
	if (mysqli_connect_errno())	{
		die_and_display('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
	}
	
	#Query to return contact details
	$select = "SELECT serial AS 'Serial', contents AS 'Contents', owner AS 'Owner', TIMESTAMP AS 'Time Sent' ";
	$from 	= "FROM  contact ";
	$where 	= "WHERE serial = '$serial' ";
	$order 	= "ORDER BY timestamp DESC";
	$sql	= $select . $from . $where . $order;
	
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
				<th>Serial</th>
				<th>Contents</th>
				<th>Owner</th>
				<th>Time Sent</th>
			</tr>
        </thead>
        <tbody>
          
<?php
	
		#Loop and print contents of SQL query
		while($row = mysqli_fetch_array($result))	{
		
			echo "<tr>";
			echo "<td>" . $row['Serial'] . "</td>";
			echo "<td>" . $row['Contents'] . "</td>";
			echo "<td>" . $row['Owner'] . "</td>";
			echo "<td>" . $row['Time Sent'] . "</td>";
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