<?php
$name=$_POST['name'];
$visitor_email= $_POST['email'];
$subject = $_POST['subject'];
$message =$_POST['message'];


$email_form ='college @email.com';

$email_subject ='new form submission';

$email_body ="User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $subject.\n"
             "User Message: $message.\n".

$to ='123456@gmai.com';

$headers="From: $email_from \r\n";

$headers="Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contact.html");




?>