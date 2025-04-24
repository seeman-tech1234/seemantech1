<?php
$name =$_POST['name'];
$visitor_email = $_POST['email'];
$subject = $POST['subject'];
$massage = $POST['massage'];


$email_from = 'seeman@explorewbsite.com';
$email_subject ='New Form Submission';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Subject: $subject.\n".
                 "User Massage: $massage.\n";
 $to = 'bandeseeman@gmail.com';
 
 $headers = "From: $email_from \r\n";

 $heders .= "Reply-To: $visitor_email \r\n";

 mail($to,$email_subject,$email_body,$headers);
 header("Location: contact.html");



?>