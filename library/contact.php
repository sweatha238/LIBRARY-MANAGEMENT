<?php
 $name = $_Post['name'];
 $visitor_email = $_Post['email'];
 $message = $_Post['message'];




 $email_from = 'sweatha626@gmail.com';

 $email_subject = "New Form submission";

 $email_body = "user name: $name.\n" .
                     "user email: $visitor_email.\n".
                            "user message: $message.\n";

$to = "shwevandhana@gmail.com";

$headers = "From: $email_from \r\n";

$headers = "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");


?>