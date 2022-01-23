<?php

$nama= $_POST['nama'];
$hp= $_POST['hp'];
$alamat= $_POST['alamat'];
$usermail= $_POST['usermail'];
$body= "
Nama : $nama <br/>
HP : $hp <br/>
Alamat: $alamat <br/>
Email: $usermail <br/>
";

function Send_Mail($to,$subject,$body)
{
require 'PHPmailer/class.phpmailer.php';

 

$usermail= $_POST['usermail'];
$mail = new PHPMailer();
$mail->IsSMTP(true); // SMTP
$mail->SMTPAuth = true; // SMTP authentication
$mail->Host= "682018028@gmail.com";
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->SetFrom("682018028@gmail.com","email sender");
$mail->Username = "682018028@gmail.com"; // username gmail yang akan digunakan untuk mengirim email
$mail->Password = "AndreasT1ST"; // Password email
$mail->SetFrom($usermail, 'user');
$mail->AddReplyTo($usermail,'user');
$mail->Subject = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->AddAddress($usermail);
if(!$mail->Send())
return false;
else
return true;

}

$to = "andreastunggono.at@gmail.com"; //email tujuan
$subject = "New Form Submission"; // subject email
echo"<br/><br/><center><h3>email telah terkirim</h3></center>";
Send_Mail($to,$subject,$body);
?>