<?php

	#Does not appear to work when connected to the internal work network / proxy server
	include("inc/PHPMailerAutoLoad.php");
	
	$mail = new PHPMailer;
	
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPAuth = true;
	$mail->Username = 'automatemailertest@gmail.com';
	$mail->Password = 'P@ssword13';
	$mail->SMTPSecure = 'tls';
	$mail->SMTPDebug  = 2;
	
	$mail->From = 'automatemailertest@gmail.com';
	$mail->FromName = 'Sender - Eoin';
	$mail->addAddress('eoinmc@gmail.com', 'Eoin McCrann');
		
	$mail->isHTML(true);
	
	$mail->Subject = 'SUBJECT!';
	$mail->Body = '<b>HTML BODY</b>!';
	$mail->AltBody = 'Normal body!';
	
	if(!$mail->send())	{
		echo 'Could not be sent';
		echo 'Error: ' . $mail->ErrorInfo;
		exit;
	}
	
	echo 'Message sent!';

?>