<?php

    function listar(){
        require './models/librosModel.php';
    $libros = getLibros();
    include './views/librosListar.php';
    }

    
    
?>