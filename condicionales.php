<?php 

$string_bool = true;

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
    <?php if($string_bool):?>
        <b>😄</b>
    <?php else: ?>
        <b>😒</b>
    <?php endif; ?>
</body>
</html>