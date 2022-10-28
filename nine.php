<?php
    $nine_table = [];

    for ($i=1; $i <=10 ; $i++) { 

        $result = 9 * $i;
        $txt = "9 * $i = $result"; 

        array_push($nine_table, $txt);
    }
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
    <h1>Tabla del 9</h1>

    <ul>
        <?php foreach ($nine_table as $resp): ?>
            <li><?= $resp ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>