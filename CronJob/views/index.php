<?php
require('../assets/class.phpmailer.php');
require('../assets/class.smtp.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML(true);
$mail->Username = "ldskimboards@gmail.com";
$mail->Password = "ENTERWAVES9";
$mail->Subject = 'Hello World';
$mail->Body = 'A test email!';
$mail->AddAddress('ldskimboards@gmail.com');

$mail->Send();
echo 'Email Sent!';
?>
