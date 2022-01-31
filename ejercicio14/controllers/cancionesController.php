<?php

    session_start();

    if (empty($_SESSION["usuario"])) {        
        header("Location: index.php");
    }

    function listar(){
        require './models/cancionesModel.php';
        /**
         * variable $canciones debe coincidir con
         * la variable del foreach de cancionListar.php
         */ 
        $canciones = obtenerCanciones();
        include './views/cancionListar.php';
    }

    function unaCancion(){
        require './models/cancionesModel.php';
        $id= $_GET["id"];
        $cancion = obtenerCancion($id);
        include './views/unaCancion.php';
    }

    function form(){
        require './models/cancionesModel.php';
        //Si hay id muéstrado con el id correspondiente
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $action = "?controller=canciones&action=crearEditar&id=$id";


        //Si no hay id, aparece el id vacío    
        }else{
            $id = "";
            $action = "?controller=canciones&action=crearEditar";
        }


            //se recogen los datos de la canción ya creada por id
        if (!empty($_GET["id"])||!empty($_POST["id"])){
            $cancion = obtenerCancion($id);

            
        }else {
            //se crea la cancion por primera vez
            $cancion["nombre"] = "";
            $cancion["genero"] = "";
            $cancion["autor"] = "";
            $cancion["duracion"] = "";
            $cancion["copyright"] = "";
            $cancion["lanzamiento"] = "";
            $cancion["imagencd"] = "";

        }
        include './views/formulario.php'; 
    }
    
    function crearEditar(){
        require './models/cancionesModel.php';

        $nombre = $_POST["nombre"];
        $genero = $_POST["genero"];
        $autor = $_POST["autor"];
        $duracion = $_POST["duracion"];
        $copyright = $_POST["copyright"];
        $lanzamiento = $_POST["lanzamiento"];
        $imagencd = $_FILES["imagencd"]["name"];

        if (empty($imagencd)) {
           if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $elementoActual = obtenerCancion($id);
            $imagencd = $elementoActual["imagencd"];
           }
        }
        
        //Si hay id muéstrado el id correspondiente
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            editarCancion($id, $nombre, $genero, $autor, $duracion, $copyright, $lanzamiento, $imagencd);  

        //Si no hay id, aparece el id vacío    
        }else{
            $id = "";
            insertaCancion($nombre, $genero, $autor, $duracion, $copyright, $lanzamiento, $imagencd);
        }
        
        header("Location: ?controller=canciones&action=listar");
    }
    
    function borrar(){
        require './models/cancionesModel.php';
            $id= $_GET["id"];
            $resultado = eliminaCancion($id);
            include './views/borrarCancion.php';
    }
