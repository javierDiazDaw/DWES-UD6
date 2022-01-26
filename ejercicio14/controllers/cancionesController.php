<?php

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
    
    function crear(){
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

            $result= insertaElemento($nombre, $genero, $autor, $duracion, $copyright, $lanzamiento, $imagencd);
            
            if($result > 0 ){
                header("location: view.php?id=$result");
                exit();
            }
        }
        $crearCancion = insertaCancion($nombre, $genero, $autor, $duracion, $copyright, $lanzamiento, $imagencd);
    }


    function editar(){
        require './models/cancionesModel.php';
            $id= $_GET["id"];
            $edit = obtenerCancion($id);
            include './views/editarCancion.php';

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

                $result= insertaElemento($nombre, $genero, $autor, $duracion, $copyright, $lanzamiento, $imagencd);
                
                if($result > 0 ){
                    header("location: view.php?id=$result");
                    exit();
                }
            }
            $editar = editarCancion($id, $nombre, $genero, $autor, $duracion, $copyright, $lanzamiento, $imagencd);
        }



           

       

    function borrar(){

    }
?>