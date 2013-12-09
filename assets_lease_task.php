<?php 
	
	include("inc/functions.php");

	#Users who have not yet logged a call
	$sql = "SELECT serial_num AS 'Serial', owner AS 'Assigned To', email_address AS 'Email', status_level AS 'Status', callref as 'Call Ref', purchase_order_number AS 'Invoice'
FROM assets	LEFT OUTER JOIN opencall ON opencall.cust_name = assets.owner WHERE purchase_order_number = '2011' AND callref IS NULL AND status_level = 'Assigned'";
	#echo $sql;
	
	#Connect
	$connection = mysqli_connect("localhost", "root", "", "swdata");
	
	#Check connection
	if (mysqli_connect_errno())	{
		die_and_display('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
	}
	$result = mysqli_query($connection, $sql);
	
	#Get the email addresses for each result
	while($row = mysqli_fetch_array($result))	{
		
		#echo $row[2] . "<br />";
		
		#Mail users (email address, owner name)
		mailUser($row[2], $row[1]);
	
	}

?>