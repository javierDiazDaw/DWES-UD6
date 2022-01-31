<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Borrar Cancion</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Página principal</a></li>
            <li><a href="?controller=canciones&action=form">Nuevo elemento</a></li>
            <li><a href="?controller=canciones&action=listar">Lista elementos</a></li>
            <li><a href="?action=cerrarSesion">Cerrar sesion</a></li>
        </ul>
    </nav>
    <?php

    echo 'Canción eliminada con éxito';

    ?>
</body>

</html>