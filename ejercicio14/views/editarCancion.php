<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/botonera.css">
        <link rel="stylesheet" href="css/form.css">
        <title>editar elemento</title>
    </head>

    <body>
        <nav>
            <ul>
                <li><a href="index.php">Página principal</a></li>
                <li><a href="?controller=canciones&action=form">Nuevo elemento</a></li>
                <li><a class="active" href="?controller=canciones&action=listar">Lista elementos</a></li>
                <li><a href="?action=cerrarSesion">Cerrar sesion</a></li>
            </ul>
        </nav>
        <form class="form-register" action="index.php?controller=canciones&action=editar" method="POST" enctype="multipart/form-data">
            <h2 class="form-titulo">Características:</h2>
            <div class="contenedor-inputs">
            <input type="hidden" name="id" value ="<?php echo $id?>">
                <input type="text" name="nombre" placeholder="Nombre" class="input-100" required value ="<?php echo $nombre?>">
                <input type="text" name="genero" placeholder="Genero" class="input-100" required value ="<?php echo $genero?>">
                <input type="text" name="autor" placeholder="Autor" class="input-100" required value ="<?php echo $autor?>">
                <input type="number" name="duracion" placeholder="Duracion" class="input-48" required value ="<?php echo $duracion?>">
                <input type="number" name="copyright" placeholder="Copyright" class="input-48"required value ="<?php echo $copyright?>">
                <input type="date" name="lanzamiento" placeholder="Lanzamiento" class="input-100" required value ="<?php echo $lanzamiento?>">
                <img name="avatarActual" width=200px src="images/<?php echo $imagencd?>">
                <input type="file" name="imagencd" accept="image/png, image/jpeg" class="input-100" >
                <input type="submit" name="submit" value="Editar" class="btn-enviar">
                <div id="errores"><?php echo $error?></div>                
            </div>
        </form>
    </body>
</html>