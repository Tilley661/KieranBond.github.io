<?php 

$name = $_POST[Kieran];
$email = $_POST['Kieranbond97@gmail.com'];
$message = $_POST['message'];
$formcontent="Contact form\n\nFrom: $name \nMessage: $message";
$recipient = "Kieranbond97@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! E-mail send.";

?>