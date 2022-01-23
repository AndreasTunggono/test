<?php 

if(!isset($_POST['submit']))
{
    echo "error, you need to submit the form!";
}
$name = $_POST ['name'];
$visitor_email = $_POST ['email'];
$message = $_POST ['message'];

if(empty($name)||empty($visitor_email))
{
    echo "Name and email are mandatory";
    exit;
}

$email_from = 'andreastunggono.at@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "Your have received a new message from $name.\n".
"email address : $visitor_email.\n"
"Here is the message : $message.\n"

$to = "andreastunggono.at@gmail.com";
$headers = "from : $email_from \r\n";

mail($to,$email_subject,$email_body,$headers)


?> 