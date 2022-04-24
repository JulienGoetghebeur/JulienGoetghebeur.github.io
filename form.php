<?php 
if(isset($_POST['submit'])){
    $to = "juliengoet@me.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['nom'];
    $subject = "Message depuis mon site internet : " . $_POST['objet'];
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Message envoyé.";
    }
?>