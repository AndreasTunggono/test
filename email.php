<?php

$name= $_POST['Nama'];
$email= $_POST['Email'];
$tanggal= $_POST['Tanggal'];
$namedept= $_POST['Nama department'];
$desc= $_POST['Deskripsi Temuan'];
$detail= $_POST['Detail Temuan'];
$category= $_POST['Kategori Temuan'];
$body= "
Nama : $name <br/>
Email : $email <br/>
Tanggal: $taggal <br/>
Nama Department: $namedept <br/>
Deskripsi Temuan: $desc <br/>
Detail Teuan: $detail <br/>
Kategori Temuan: $category <br/>
";

function Send_Mail($to,$subject,$body)
{
require 'PHPmailer/class.phpmailer.php';

 

$usermail= $_POST['usermail'];
$mail = new PHPMailer();
$mail->IsSMTP(true); // SMTP
$mail->SMTPAuth = true; // SMTP authentication
$mail->Host= "682018028@student.uksw.edu";
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->SetFrom("682018028@student.uksw.edu","email sender");
$mail->Username = "682018028@student.uksw.edu"; // username gmail yang akan digunakan untuk mengirim email
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