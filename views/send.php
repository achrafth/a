<?php

include_once '../phpmailer/src/PHPMailer.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'yassine.sta@esprit.tn';
$mail->Password = 'azertysta';
$mail->setFrom("no-reply@esprit.tn");
$mail->Subject = "Activation de compte";
$mail->Body = 'Veuillez cliquez sur ce  <a href="verification.php">lien</a> afin d\'activer votre compte';
$mail->AddAddress('yassine.sta@esprit.tn');
$mail->send();