<?php

    function listar(){
        require './models/librosModel.php';
    $libros = getLibros();
    include './views/librosListar.php';
    }

    function unLibro(){
        require './models/librosModel.php';
        $id= $_GET["id"];
        $libros = mostrarLibro($id);
        require './views/unLibro.php';

    }
    
    
?>