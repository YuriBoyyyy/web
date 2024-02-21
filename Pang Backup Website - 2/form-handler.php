<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'yurisaavedra723@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Message: $message.\n";

$to = 'yurisaavedra723@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitors_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: Contacts.html");






?>