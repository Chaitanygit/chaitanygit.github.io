<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='saichaitanya906@gmail.com'

$email_subject='New Form Submission';

$email_body="user Name: $name.\n"."user Email: $visitor_email.\n"."Subject: $subject.\n"."user Message: $message.\n"
$to='saichaitanya906@gmail.com';

$headers="From:$email_from \r\n";
$headers="Reply-To:$visitor_email";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>