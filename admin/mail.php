<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $to = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mail = new PHPMailer(true);

  try {
    // Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // ❗ Pakai gmail.com, bukan google.com
    $mail->SMTPAuth   = true;
    $mail->Username   = 'radityadwitama2@gmail.com'; // ganti dengan email kamu
    $mail->Password   = 'ykjhbskrmxukaidk'; // password app, bukan password biasa
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom('radityadwitama2@gmail.com', 'DIMin');
    $mail->addAddress($to);
    $mail->addReplyTo('radityadwitama2@gmail.com', 'DIMin');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Re: ' . htmlspecialchars($subject);
    $mail->Body    = "
      <p>Hi,</p>
      <p>{$message}</p>
      <p><br>Warm greetings,<br><strong>Admin DS</strong></p>
    ";
    $mail->AltBody = strip_tags($message);

    $mail->send();
    header("Location: mssg.php?success=1");
    exit;
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
} else {
  header("Location: mail_php.php");
  exit;
}
