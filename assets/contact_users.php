<?php 
	
	/**
	 * Get list of users who have not yet logged a call, send an email to each one, store record of this email in automate.contact, display results
	 */
	$pagetitle = "Contact Outstanding Users";
	
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
	require_once("/../resources/mailer/PHPMailerAutoLoad.php");
	checkLogin();
	
	global $mail_counter;
	
	#Determine what invoice file was selected
	if(isset($_GET['invoice']))	{
			$invoice = $_GET['invoice'];		
	}
	else	{
			$invoice = "";
	}
	$jobdesc = '';
	
	#Users who have not yet logged a call
	$select = "SELECT serial_num AS 'Serial', owner AS 'Assigned To', jobdesc AS 'jobdesc', email_address AS 'Email', status_level AS 'Status', callref as 'Call Ref', purchase_order_number AS 'Invoice' ";
	$from 	= "FROM assets ";
	$join 	= "LEFT OUTER JOIN opencall ON opencall.cust_name = assets.owner ";
	$join_u	= "LEFT OUTER JOIN userdb ON userdb.fullname = assets.owner ";
	$where 	= "WHERE purchase_order_number = $invoice AND callref IS NULL AND status_level = 'Assigned'";
	$sql 	= $select . $from . $join . $join_u . $where;
	
	$insert = "INSERT INTO contact(serial, purchase_order_number, owner, jobdesc, email, contents) VALUES (?, ?, ?, ?, ?, ?)";
	
	$connection = mysqli_connect("localhost", "root", "", "swdata");
	$connection_automate = mysqli_connect("localhost", "root", "", "automate");
	
	if (mysqli_connect_errno())	{
		die_and_display('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
	}
	
	$result = mysqli_query($connection, $sql);
	$result_automate = mysqli_query($connection_automate, $insert);
	$stmt_insert = $connection_automate->prepare($insert);
	
	if ( false === $stmt_insert )	{
		die_and_display('<p class=die>Preparing the INSERT statement failed: ' . htmlspecialchars($connection_automate->error) . "</p>");		
	}
	
	$insertArray = array("","","","","","","","");
	
	echo "<table cellpadding='5' cellspacing='10' border='1' class='hor-minimalist-a'>";
	
	#Get the email addresses for each result
	while($row = mysqli_fetch_array($result))	{
		
		#email address, owner name, serial, jobdesc
		messageUser($row[3], $row[1], $row[0], $row[2]);
		#[0] = serial, [1] = owner, [2] = jobdesc, [3] = email, [4] = status, [5] = callref, [6] = invoice
		
		$bp_insert = $stmt_insert->bind_param('ssssss', $row[0], $row[6], $row[1], $row[2], $row[3], $body);
		
		if ( false === $bp_insert )	{
			die_and_display('Binding parameters for INSERT failed: ' . htmlspecialchars($stmt_cmdb->error));
		}
		
		$bp_insert = $stmt_insert->execute();
	
		if ( false === $bp_insert )	{
			die_and_display('<div id="alert"><a class="alert">Executing INSERT import failed: ' . htmlspecialchars($stmt_insert->error) . '</a></div>');
		}
		
		$mail_counter++;
	}
	
	echo "</table>";
	
	echo "<p>Total number of users mailed: " . $mail_counter . "</p><br />";
	
	$stmt_insert->close();
	mysqli_free_result($result);
	
	require_once("/../inc/footer.php");
	
?>