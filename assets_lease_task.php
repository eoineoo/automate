<?php 
	
	/**
	 * Scheduled task: Get list of users who have not yet logged a call, send an email to each one, store record of this email in automate.contact
	 */
	
	include("inc/functions.php");
	include("inc/PHPMailerAutoLoad.php");
	
	#Users who have not yet logged a call
	$select = "SELECT serial_num AS 'Serial', owner AS 'Assigned To', email_address AS 'Email', status_level AS 'Status', callref as 'Call Ref', purchase_order_number AS 'Invoice' ";
	$from 	= "FROM assets ";
	$join 	= "LEFT OUTER JOIN opencall ON opencall.cust_name = assets.owner ";
	$where 	= "WHERE purchase_order_number = '2011' AND callref IS NULL AND status_level = 'Assigned'";
	$sql 	= $select . $from . $join . $where;
	
	#Prepared statement for insert
	$insert = "INSERT INTO contact(serial, purchase_order_number, owner, email, contents) VALUES (?, ?, ?, ?, ?)";
	
	#Connect
	$connection = mysqli_connect("localhost", "root", "", "swdata");
	$connection_automate = mysqli_connect("localhost", "root", "", "automate");
	
	#Check connection
	if (mysqli_connect_errno())	{
		die_and_display('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
	}
	
	$result = mysqli_query($connection, $sql);
	$result_automate = mysqli_query($connection_automate, $insert);
	
	$stmt_insert = $connection_automate->prepare($insert);
	
	#Error checking the prepared statement
	if ( false === $stmt_insert )	{
		die_and_display('<p class=die>Preparing the INSERT statement failed: ' . htmlspecialchars($connection_automate->error) . "</p>");		
	}
	
	#Initialise array
	$insertArray = array("","","","","","","");
	
	$body = "Test";
	
	#Get the email addresses for each result
	while($row = mysqli_fetch_array($result))	{
		
		#Mail users (email address, owner name, serial)
		messageUser($row[2], $row[1], $row[0]);
		#echo "Serial : " . $row[0] . ", PO: " . $row[5] . ", Owner: " . $row[1] . ", Email: " . $row[2] . ", Subject: [], Contents: [] <br />";
		
		#Bind parameters to the array
		$bp_insert = $stmt_insert->bind_param('sssss', $row[0], $row[5], $row[1], $row[2], $body);
		
		#Error checking for binded parameters
		if ( false === $bp_insert )	{
			die_and_display('Binding parameters for INSERT failed: ' . htmlspecialchars($stmt_cmdb->error));
		}
		
		#Run statement
		$bp_insert = $stmt_insert->execute();
	
		#Error checking the execution of the prepared statement
		if ( false === $bp_insert )	{
			die_and_display('<div id="alert"><a class="alert">Executing INSERT import failed: ' . htmlspecialchars($stmt_insert->error) . '</a></div>');
		}
	}
	
	#Close open connections
	$stmt_insert->close();
	mysqli_free_result($result);
	
?>