<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone'];
$messege = $_POST['messege'];


$email_form ='info@arnobsd.github.io/Test';
$email_subject ='New Form Submission';
$email_body ="User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Phone: $phone.\n".
                "User Name: $messege.\n";


$to ='pcsdasdp@gmail.com';
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: index.html")
?>
