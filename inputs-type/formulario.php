<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./server.php" method="post" enctype="multipart/form-data">

        <!-- Input Simple -->
        <!-- <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"> -->

        <!-- Arrays -->
        <!-- <label>Personas:</label>
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <input type="text" name="personas[]"> -->

        <!-- Arreglos Asociativos -->
        <!-- <label>Nombre de la Persona:</label>
        <input type="text" name="persona[nombre]">
        <label>Correo de la Persona:</label>
        <input type="email" name="persona[email]">
        <label>Edad de la Persona:</label>
        <input type="number" name="persona[edad]"> -->

        <!-- Checkbox -->
        <!-- <input type="checkbox" name="list1">
        <input type="checkbox" name="list2" value="Valor escogido">
        <input type="checkbox" name="list3"> -->

        <!-- Radios -->
        <!-- <label for="ecuador">Ecuador</label>
        <input type="radio" name="pais" value="Ecuador" id="ecuador">
        <label for="colombia">Colombia</label>
        <input type="radio" name="pais" value="Colombia" id="colombia">
        <label for="mexico">México</label>
        <input type="radio" name="pais" value="México" id="mexico"> -->

        <!-- Multiples archivos -->
        <label for="galeria">Load your photos</label>
        <input type="file" multiple name="galeria[]" id="galeria">

        <button type="submit">Send</button>

    </form>
</body>
</html>