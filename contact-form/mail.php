<?php

use PHPMailer\PHPMailer\PHPMailer;

require("./vendor/autoload.php");

function sendMail($subject, $body, $email, $name, $html=false)
{
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = 465;
    $phpmailer->Username = 'kgcoro@gmail.com';
    $phpmailer->Password = 'wwmjozlgmtkxobww';

    // Añadiendo destinatarios
    $phpmailer->setFrom('contact@miempresa.com', 'Mi empresa');
    $phpmailer->addAddress($email, $name); 

    //defiiendo contenido de mi email
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;
    
    //Mandar el correo
    $phpmailer->send();
   
}
