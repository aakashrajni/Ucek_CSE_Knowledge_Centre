<?php

require 'PHPMailer/PHPMailerAutoload.php';

session_start();


$register = $_SESSION['re'];
$random2 = $_SESSION['changepassword'];
$em1 = $_SESSION['emailts1'];



$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'imbatman111111111@gmail.com';          // SMTP username
$mail->Password = 'brucewaynethebatman'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('imbatman111111111@gmail.com', 'Batman');
$mail->addReplyTo('imbatman111111111@gmail.com', 'Batman');
$mail->addAddress($em1);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Password recovery</h1>';
$bodyContent .= '<p>New Password :<b>'.$random2.'</b></p>';

$mail->Subject = 'Email from Localhost by Batman';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    header('Location: changepwd.php');
} else {
    echo 'Message has been sent';
    header('Location: profile.php');
}


?>
