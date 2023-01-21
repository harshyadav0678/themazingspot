<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_form = 'harshyadavv067@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message .\n".
$to = 'harshyadavv067@gmail.com';

$headers = "form: $email_form \r\n";

$headers = "reply-to: $visitors_email \r\n";

mail($to,$email_subject,$email_body,$headers)

header("location: contact.html");
?>
