<?php

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
		include("../inc/footer.php");
		die();
	}
	
	#Function to send email using PHPMailer
	function messageUser($address, $owner, $serial)	{
		
		global $body; 
		$body = 'Hello <b>' . $owner . '</b>. Your laptop (<b>' . $serial . '</b>) is due to be returned.</b>';
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
		
		echo '<tr><td>Message sent to user: <b>' . $owner . '</b> (<b>' . $address . '</b>) @ ' . $time . '</td></tr>';

		#Output for logfile
		$output = "Message sent to user: $owner ($address) @ $time \r\n";
			
		writeToFile($output);
		return $body;
	}
	
?>