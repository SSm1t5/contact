<?php


	$to = "your_email@edinburghcollege.ac.uk";//change email address - should be client but use a student email for testing
	$subject = "Enquiry";
	$email_field = $_POST['email'];
	$message = $_POST['message'];
		
	$body = "From: E-Mail: $email_field\n Message:\n $message\n";

	echo("Thank you your message has been sent $to");
	mail($to, $subject, $body);

?>