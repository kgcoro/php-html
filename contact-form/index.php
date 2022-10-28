<?php

require("mail.php");

function validate($name, $email, $subject, $message, $form) {
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

$status = "";

if ( isset($_POST["form"]) ) {
    if (validate(...$_POST)) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $body = "$name <$email> te envia el siguiente mensaje: <br><br> $message";
        sendMail($subject, $body, $email, $name, true);
        
        $status = "success";
    } else {
        $status = "danger";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Formulario de contacto</title>
</head>

<body>
    <?php if($status == "danger"): ?>
        <div class="alert danger">
            <span>Surgió un problema
            </span>
        </div>
    <?php endif; ?>
    <?php if($status == "success"): ?>
        <div class="alert success">
            <span>Mensaje enviado con exito</span>
        </div>
    <?php endif; ?>

    <form action="./" method="POST">
        <h1>Contactanos</h1>
        <div class="input-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="input-group">
            <label for="email">Correo:</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="input-group">
            <label for="subject">Asunto:</label>
            <input type="text" name="subject" id="subject">
        </div>
        <div class="input-group">
            <label for="message">Mensaje:</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>

        <div class="button-container">
            <button type="submit" name="form">Enviar</button>
        </div>

        <div class="contact-info">
            <class class="info">
                <span>
                    <i class="fa-solid fa-location-dot"></i>
                    13 Saw Mill Circle, North Olmested.
                </span>
            </class>
            <div class="info">
                <span>
                    <i class="fa-solid fa-phone"></i>
                    +593 666 7272
                </span>
            </div>
        </div>
    </form>
</body>

</html>