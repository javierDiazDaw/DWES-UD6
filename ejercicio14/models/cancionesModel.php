<?php

    function getConnection(){
        $usuario = "developer";
    $pass = "developer";
        return new PDO('mysql:host=localhost;dbname=musica', $usuario, $pass);
    }

    
    function obtenerCancion($id){
        
        try {      
            $db = getConnection();
            $result = $db->prepare('SELECT * FROM cancion WHERE id = ?');
            $result->bindParam(1, $id);
            $result->execute();
            $libros = array ();
            while ($libro = $result->fetch())
            $libros[] = $libro;

        return $libros;
        } catch (PDOException $e) {
            return false;
        }
        $conexion = null;
    }

    function eliminaElemento($id){
        try{
            $conexion = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[baseDatos]", $GLOBALS['usuario'], $GLOBALS['pass']);
            $consulta =$conexion->prepare("DELETE FROM cancion WHERE id=:id"); 
            $parametros = array(":id"=>$id);
            return $consulta->execute($parametros);
        } catch(PDOException $e){
            return false;
        }
        $conexion = null; 
    }

    function editarElemento($id, $nombre, $genero, $autor, $duracion, $copyright, $lanzamiento, $imagencd){
        try{
            $conexion = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[baseDatos]", $GLOBALS['usuario'], $GLOBALS['pass']);
            $consulta =$conexion->prepare("UPDATE cancion SET nombre=?,genero=?,autor=?,duracion=?,copyright=?,lanzamiento=?,imagencd=? WHERE id=?"); 
            $consulta->bindParam(8,$id);
            $consulta->bindParam(1,$nombre);
            $consulta->bindParam(2,$genero);
            $consulta->bindParam(3,$autor);
            $consulta->bindParam(4,$duracion);
            $consulta->bindParam(5,$copyright);
            $consulta->bindParam(6,$lanzamiento);
            $consulta->bindParam(7,$imagencd);
        
            $consulta->execute();
            $conexion = null; 
        
            $Lineas = $consulta -> rowCount();
            if ($Lineas == 0) {
                return false;
            } else{
                return true;
            } 
            
        } catch(PDOException $e){
            return false;
        }
        
    }

    

    function obtenerTodos(){
        try {    
            $db = getConnection();
            $consulta = $db->prepare("SELECT id, nombre, genero, duracion, lanzamiento FROM cancion"); 
            $consulta->execute(); 
            $array = [];
            while($fila = $consulta->fetch(PDO::FETCH_BOTH)){
                $array[]=$fila;
            }
            return $array;
            
        } catch (PDOException $e) {
            return false;
        }
        $conexion = null;
    }

    function insertaElemento($nombre, $genero, $autor, $duracion, $copyright, $lanzamiento, $imagencd){
        try {   
            $conexion = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[baseDatos]", $GLOBALS['usuario'], $GLOBALS['pass']);        
            //prepare: recibe la consulta pendiente de los valores insertados por el usuario.
            $consulta =$conexion->prepare("INSERT INTO cancion (nombre, genero, autor, duracion, copyright, lanzamiento, imagencd) VALUES (?,?,?,?,?,?,?)"); 
            //bindParam: asigna los valores a los parámetros definidos en la consulta.
            $consulta->bindParam(1,$nombre);
            $consulta->bindParam(2,$genero);
            $consulta->bindParam(3,$autor);
            $consulta->bindParam(4,$duracion);
            $consulta->bindParam(5,$copyright);
            $consulta->bindParam(6,$lanzamiento);
            $consulta->bindParam(7,$imagencd);
            //execute: ejecuta la consulta;
            $consulta->execute();
            // te devuelve un numero, si es mayor a 0 se ha hecho correctamente
            $lastID = $conexion->lastInsertId();
            return $lastID;
        } catch (PDOException $e) {
            return false;
        }
        $conexion = null;
    }


/*De acción: INSERT, UPDATE, DELETE. Se utiliza el método exec, devolviendo el número de registros afectados.
  De obtención: SELECT. Se utiliza el método query, obteniendo el resultado como veremos a continuación.*/



?>