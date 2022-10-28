<?php

/* if ( isset($_POST["nombre"]) && !empty($_POST["nombre"]) ) {
    echo "Bienvenido " . $_POST['nombre'];
} else {
    echo "No hay datos recibidos";
}
 */

 if (isset($_POST["form"])) {
    echo "Formulario enviado correctamente";
 } else {
    echo "No se envio el formulario";
 }
