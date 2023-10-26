<?php

$name = $_POST['name'];
$visitor_email=$_POST['email'];
$subject =$_POST['subject'];
$message=$_POST['message'];

$email_from ='info@test.com';  //domain-name is used as email

$email_subject = 'New Form Submission';

$email_body = 'User Name:$name.\n'.
                'User Email: $visitors_email.\n'.
                  'subject: $subject.\n'.
                    'User Message: $message.\n';

//to recieve
$to = 'meettysobha1998@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Replt-To: $visitor_email \r\n";

//send messages to email

mail($to,$email_subject,$email_body,$headers);

headers("Location : contact.html");

?>