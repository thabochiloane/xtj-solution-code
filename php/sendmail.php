<?php
	$email_to = "inquiries@xtjsolutions.co.za";
	$name = $_POST["Name"];
	$email_from = $_POST["Email"];
	$contact_no = $_POST["Contact_no"];
	$message = $_POST["Message"];
	$email_subject = "Please contact me back";
	$headers = "From: " . $email_from . "\n";
	$headers .= "Reply-To: " . $email_from . "\n";
	
	$message = "Name: ". $name . "\r\nContact: " . $contact_no . "\r\nMessage: " . $message;
		
	//echo $message;
	
	ini_set("sendmail_from", $email_from);
	$sent = mail($email_to, $email_subject, $message, $headers, "-f" .$email_from);
	
	//echo $sent;
	
	if ($sent)
	{
		header("Location: http://www.xtjsolutions.co.za/thankyou.html");
	} else {
		echo "There has been an error sending your comments. Please try later.";
	}
?>