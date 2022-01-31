<?php

    session_start();

    if (!isset($_SESSION["usuario"])) {
        header("Location: index.php");
    }

    function listar(){
        require './models/cancionesModel.php';
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
        //Si hay id muéstrado el id correspondiente
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
    
    /*function crear(){
        require './models/cancionesModel.php';        
        include './views/crearCancion.php';

        $nombre = "";        
        $autor = "";     
        $genero = "";       
        $duracion = "";        
        $copyright = "";        
        $lanzamiento = "";       
        $imagencd = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nombre = $_POST["nombre"];
            $genero = $_POST["genero"];
            $autor = $_POST["autor"];
            $duracion = $_POST["duracion"];
            $copyright = $_POST["copyright"];
            $lanzamiento = $_POST["lanzamiento"];
            $imagencd = $_FILES["imagencd"]["name"];

            $target_dir = "images/";
            $target_file = $target_dir . basename($_FILES["imagencd"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["imagencd"]["tmp_name"]);
                if ($check !== false) {
                    echo "El archivo " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "El archivo no es una imagen.";
                    $uploadOk = 0;
                }
            }

            if ($uploadOk == 0) {
                echo "Lo siento, el archivo no ha sido subido.";
               
            } else {
                if (move_uploaded_file($_FILES["imagencd"]["tmp_name"], $target_file)) {
                    echo "el archivo " . htmlspecialchars(basename($_FILES["imagencd"]["name"])) . " ha sido subido.";
                } else {
                    echo "Error al subir el archivo.";
                }
            }            

            $result= insertaCancion($nombre, $genero, $autor, $duracion, $copyright, $lanzamiento, $imagencd);
            
            if($result > 0 ){
                header("Location: ?controller=canciones&action=listar");
                exit();
            }
        }
        $crearCancion = insertaCancion($nombre, $genero, $autor, $duracion, $copyright, $lanzamiento, $imagencd);
    }


    function editar(){
        require './models/cancionesModel.php';
            $id= $_GET["id"];
            $resultado = obtenerCancion($id);            

                $nombre = $resultado["nombre"];
                $genero = $resultado["genero"];
                $autor = $resultado["autor"];
                $duracion = $resultado["duracion"];
                $copyright = $resultado["copyright"];
                $lanzamiento = $resultado["lanzamiento"];
                $imagencd = $resultado["imagencd"];

                $error = "";

                include './views/editarCancion.php';

            
                if (editarCancion($id, $nombre, $genero, $autor, $duracion, $copyright, $lanzamiento, $imagencd)) {
                    header("Location: ?controller=canciones&action=editar&id=$id");
                }

                
    }*/


    function borrar(){
        require './models/cancionesModel.php';
            $id= $_GET["id"];
            $resultado = eliminaCancion($id);
            include './views/borrarCancion.php';
    }
