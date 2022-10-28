<?php

$name = "Varmax";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<b>Texto de muestra con negritas</b><br>";
    ?>

    <?= "<i>Otra forma de mostrar texto</i>" ?>

    <h1>Hola <?= $name ?></h1>

</body>
</html>