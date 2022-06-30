<?php

#files: va a contener un array con las nombres de cada imagen que se encuentre en la carpeta "/imagenes"
$files = scandir("./img/");

#array_slice: elimina los dos primeros elementos del array "files"
$files = array_slice($files, 2);

$i = 0;

while ($i < count($files)) {
    
    #substr: devuelve una parte de un string, en este caso, elimina los ultimos cuatro caracteres del string
    $nombre_img = substr($files[$i], 0, -4);

    echo '<div class="cuadro-img">
            <div>
                <img src="./img/' . $files[$i] . '">
                <p>' . $nombre_img . '</p>
            </div>
          </div>';
    $i++;
}

?>