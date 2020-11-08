


<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['sujet'];
$message = $_POST['message'];

 // $to = 'pk819199@gmail.com';
 // $subject = 'Website Contactform';
 // $msg = $name . " " . $email . " " . $message;

 // mail($to, $subject, $msg);

require 'PHPMailerAutoload.php';



$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.mail.yahoo.fr";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = $email;

$mail->setFrom('jallouli.khaled@yahoo.fr',$name);
$mail->addAddress('jallouli.khaled@yahoo.fr');
$mail->Subject = $subject;
$mail->Body = $message;

if ($mail->send())
    echo "Mail sent";
?>