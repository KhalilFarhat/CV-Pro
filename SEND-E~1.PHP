<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "C:/xampp/composer/vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "cvpro3030@gmail.com";
$mail->Password = "ahrflhlhhxxcovgy";

$mail->setFrom($email, $name);
$mail->addAddress("cvpro3030@gmail.com", "CVPro");

$mail->Subject = $subject;
$message = "Name: " . $name . "\n\nEmail: " . $email . "\n\nMessage: " . $message;
$mail->Body = $message;
$mail->send();

header("Location: sent.html");

?>
