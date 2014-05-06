<?php

   /**
	* Functions.php
	*
	* List of functions used through-out project.
	*/

	#Write to a log file
	function writeToFile($output)	{
		
		#Logfile name example: 12.01.2014.txt
		$logfile = "C:/xampp/htdocs/automate/assets/logs/". date('d.m.Y') . ".txt";
		
		#Open file in append-mode
		if (!$handle = fopen($logfile, 'a')) {
			 echo "Cannot open file ($logfile)";
			 exit;
		}

		#Write $output to our opened file.
		if (fwrite($handle, $output) === FALSE) {
			echo "Cannot write to file ($logfile)";
			exit;
		}

		fclose($handle);
	}

	#Custom die() function to ensure that the page display is not broken when die() is called
	function die_and_display($message) {
		print $message;
		include("http://localhost/automate/inc/footer.php");
		die();
	}
	
	#Custom die() function to ensure that the page display is not broken when die() is called, removed footer for JQuery pages
	function die_and_display_nf($message) {
		print $message;
		die();
	}
	
	#Function to send email using PHPMailer and log it using writeToFile() - https://github.com/PHPMailer/PHPMailer
	function messageUser($address, $owner, $serial, $grade)	{
		
		global $body; 
		$body = 'Hello <b>' . $owner . ' (' . $grade . ')</b>. Your laptop (<b>' . $serial . '</b>) is due to be returned.</b>';
		$time = date("H:i:s d.m.y");
		
		$message = new PHPMailer;

		$message->isSMTP();
		$message->Host = 'smtp.gmail.com';
		$message->Port = 587;
		$message->SMTPAuth = true;
		$message->Username = 'automatemailertest@gmail.com';
		$message->Password = 'P@ssword13';
		$message->SMTPSecure = 'tls';
		
		$message->From = 'automatemailertest@gmail.com';
		$message->FromName = 'Sender - Automate Emailer';
		$message->addAddress($address, $owner);
		$message->isHTML(true);
		$message->Subject = 'Laptop Replacement - Action Required';
		$message->Body = $body;
		$message->AltBody = 'Alt Body';
		
		if(!$message->send())	{
			echo 'Could not be sent to user: ' . $owner;
			echo 'Error: ' . $message->ErrorInfo;
			exit;
		}
		
		echo '<tr><td>Message sent to user: <b>' . $owner . ' (' . $grade . ')</b> (<b>' . $address . '</b>) @ ' . $time . '</td></tr>';

		#Output for logfile
		$output = "Message sent to user: $owner ($address) @ $time \r\n";
			
		writeToFile($output);
		return $body;
	}
	
	
	#Check to see if a user logged in
	function checkLogin()	{
		session_start();
		$loggedin = $_SESSION['loggedin'];
		if ($loggedin != "1")	{
			die_and_display("<div style=\"width:50%\" class=\"alert-box error\"><span>failed: </span>User is not logged in. Please click <a href=\"http://localhost/automate\">here</a> and enter your credentials.</div>");
		}
	}

	#Check to see if the user logged in is an admin
	function checkAdminLogin()	{
		checkLogin();
		$isadmin = $_SESSION['isadmin'];
		if ($isadmin != "1")	{
			die_and_display("<div style=\"width:50%\" class=\"alert-box error\"><span>failed: </span>Currently logged in user is not an administrator.</div>");
		}
	}

	#Log user out by clearing session details, return them to the login page
	function logout()	{
		session_start();
		$_SESSION = array();
		session_destroy();
		echo "Session cleared, user logged out. Redirecting to login page.";
		header("refresh:2; url=http://localhost/automate/");
	}

	#Take in password parameter, salt it and encrypt it, $password plain-text value for a users password
	function saltAndEncryptPassword($password)	{
		$salt = "7HnJHGDQs20O3unxFJkC0bemhTek34UfqzFOqVGPkilo2FGgwHYPHICLDrfFxZR";
		$salt .= $password;
		$password = $salt;
		$password = sha1($password);		
		return $password;
	}

	#Perform database connection and query,	$sql string containing the MySQL query, $dbName with the name of the database to connect to 
	function dbSetup($sql, $dbName)	{
		if ($dbName == 'swdata')	{
			$db = new db_connect_swdata();	
		}
		else if ($dbName == 'automate')	{
			$db = new db_connect_automate();	
		}
		else	{
			die_and_display();
		}
		$result = mysql_query($sql);		
		return $result;		
	}
	
	#Check query to ensure it's valid, return error if it's not, $var result of mysql_query
	function checkQuery($var)	{
		if (!$var)	{
			$message =  "<p>$var</p><p>Failed to show any queries!</p>";
			die_and_display($message);
		}		
	}	
?>