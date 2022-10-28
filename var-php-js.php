<?php 
    $users = array(
        array(
            "id" => 0,
            "username" => "Aemond",
        ),
        array(
            "id" => 1,
            "username" => "Makar",
        ),
        array(
            "id" => 2,
            "username" => "Baela",
        ),
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar Variables de PHP a JS</title>
</head>
<body>
    <script>
        let users = JSON.parse('<?= json_encode($users) ?>');
        console.log(users);
    </script>
</body>
</html>