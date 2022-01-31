<?php

    function getConnection(){
        $usuario = "developer";
        $pass = "developer";
        return new PDO('mysql:host=localhost;dbname=musica', $usuario, $pass);
    }

    function obtenerCanciones(){
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
    }
    
    function obtenerCancion($id){        
        try {      
            $db = getConnection();
            $result = $db->prepare('SELECT * FROM cancion WHERE id = ?');
            $result->bindParam(1, $id);
            $result->execute();            
            return $result->fetch();
        } catch (PDOException $e) {
            return false;
        }        
    }

    function insertaCancion($nombre, $genero, $autor, $duracion, $copyright, $lanzamiento, $imagencd){
        try {   
            $db = getConnection();
            $consulta = $db->prepare("INSERT INTO cancion (nombre, genero, autor, duracion, copyright, lanzamiento, imagencd) VALUES (?,?,?,?,?,?,?)"); 
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
            $lastID = $db->lastInsertId();
            return $lastID;
        } catch (PDOException $e) {
            return false;
        }        
    }

    function eliminaCancion($id){        
        try {      
            $db = getConnection();
            $result = $db->prepare('DELETE FROM cancion WHERE id = ?');
            $result->bindParam(1, $id);
            $result->execute();            
            return $result->fetch();
        } catch (PDOException $e) {
            return false;
        }        
    }

    /*function eliminaCancion($id){
        try{
            $db = getConnection();
            $consulta = $db->prepare("DELETE FROM cancion WHERE id=:id"); 
            $parametros = array(":id"=>$id);
            return $consulta->execute($parametros);
        } catch(PDOException $e){
            return false;
        }        
    }*/

    function editarCancion($id, $nombre, $genero, $autor, $duracion, $copyright, $lanzamiento, $imagencd){
        try{
            $db = getConnection();
            $consulta = $db->prepare("UPDATE cancion SET nombre=?,genero=?,autor=?,duracion=?,copyright=?,lanzamiento=?,imagencd=? WHERE id=?"); 
            $consulta->bindParam(8,$id);
            $consulta->bindParam(1,$nombre);
            $consulta->bindParam(2,$genero);
            $consulta->bindParam(3,$autor);
            $consulta->bindParam(4,$duracion);
            $consulta->bindParam(5,$copyright);
            $consulta->bindParam(6,$lanzamiento);
            $consulta->bindParam(7,$imagencd);
        
            $consulta->execute();            
        
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
/*De acción: INSERT, UPDATE, DELETE. Se utiliza el método exec, devolviendo el número de registros afectados.
  De obtención: SELECT. Se utiliza el método query*/
  
?>