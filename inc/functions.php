<?php

	#Custom die() function to ensure that the page display is not broken when die() is called
	function die_and_display($message) {
		print $message;
		include("layout/footer.php");
		die();
	}
	
	function messageUser($address, $owner, $serial)	{
		
		global $body; 
		$body = 'Hello <b>' . $owner . '</b>. Your laptop (<b>' . $serial . '</b>) is due to be returned.</b>';
		
		$message = new PHPMailer;
		
		#Gmail connection settings
		$message->isSMTP();
		$message->Host = 'smtp.gmail.com';
		$message->Port = 587;
		$message->SMTPAuth = true;
		$message->Username = 'automatemailertest@gmail.com';
		$message->Password = 'P@ssword13';
		$message->SMTPSecure = 'tls';
		#$message->SMTPDebug  = 2;
		
		$message->From = 'automatemailertest@gmail.com';
		$message->FromName = 'Sender - Automate Emailer';
		
		#Pass in email address and plaintext name of owner - e.g. addAddres('eoinmc@gmail.com', 'Eoin McCrann');
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
		
		echo 'Message sent to user: ' . $owner . ')<br />';
		
		return $body;
	}
	
?>