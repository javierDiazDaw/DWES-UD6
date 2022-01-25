<?php

    function listar(){
        require './models/cancionesModel.php';
    $canciones = obtenerTodos();
    include './views/cancionListar.php';
    }

    function unaCancion(){
        require './models/cancionesModel.php';
        $id= $_GET["id"];
        $cancion = obtenerCancion($id);
        require './views/unaCancion.php';

    }
    
?>