<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$organisation = $_POST["organisation"];

$body = "Name: $name , Email: $email, Phone: $phone, Organisation: $organisation";
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->Username = "shabad.sobti@gmail.com";
		$mail->Password = "Indiaismyhome@97";
		$mail->SetFrom($email, $name);
		$mail->Subject = "DEMO REQUESTED";
		$mail->Body = $body;
		$mail->addAddress("shabad.sobti@gmail.com", "Shabad Sobti");


		 if(!$mail->Send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		 } else {
		    echo "Message has been sent";
		 }
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
