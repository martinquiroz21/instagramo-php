<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagramo</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>
        <a href="./index.php">Instagramo</a>
    </h1>

    <div class="contain">

        <?php include "./mostrarImagenes.php"; ?>

        <div class="form-public">
            <form action="./publicar.php" method="POST" enctype="multipart/form-data">
                <h3>Publicar foto</h3>
                <div class="form-inputs">
                    <div>
                        <input type="text" name="nombre" placeholder="Nombre">
                        <input type="file" name="imagenASubir">
                    </div>
                    <div>
                        <button type="submit" name="enviar">Publicar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</body>

</html>