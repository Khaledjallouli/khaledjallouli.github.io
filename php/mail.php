<?php 
if(isset($_POST['submit'])){
    $to = "jallouli.khaled@yahoo.fr"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
	$message = $_POST['message'];
    $subject = $_POST['sujet'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$from);
  //  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
   header('Location:https://khaledjallouli.yj.fr//');
    }
?>