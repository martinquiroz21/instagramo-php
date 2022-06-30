<?php

#Obtengo el nombre de la imagen
$nombre_img = $_FILES["imagenASubir"]["name"];

#Obtengo los ultimos cuatro caracteres del string
$extension_img = substr($nombre_img, -4);

#Si la extension de la imagen no es igual a "png" y "jpg" entonces se recarga la pagina y se corta la ejecucion
if ($extension_img != ".png" && $extension_img != ".jpg") {
    header('Location: ./index.php');
    exit();
}

#Obtengo el valor ingresado del input "nombre"
$nombre_ingresado = $_POST["nombre"];

if ($nombre_ingresado != "") {
    #Concateno el valor ingresado con la extension de la imagen
    $nombre_final = $nombre_ingresado . $extension_img;
}
else {
    $nombre_final = $nombre_img;
}

$rutaArchivoTemporal = $_FILES["imagenASubir"]["tmp_name"];
$rutaArchivoFinal = "./img/" . $nombre_final;

move_uploaded_file($rutaArchivoTemporal, $rutaArchivoFinal);

#header: redirecciona a otra pagina desde php
header('Location: ./index.php');
exit();
?>