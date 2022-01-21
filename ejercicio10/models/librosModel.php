<?php

    function getConnection(){
        $user='developer';
        $password = 'developer';
        return new PDO('mysql:host=localhost;dbname=biblioteca', $user, $password);
    }

    function getLibros(){
        $db = getConnection();
        $result = $db->query('SELECT titulo, precio FROM libros');
        $libros = array ();
        while ($libro = $result->fetch())
        $libros[] = $libro;

        return $libros;
    }

    function mostrarLibro($id){
        $db = getConnection();
        $result = $db->query('SELECT titulo, precio FROM libros WHERE id = ?');
        $result->bindParam(1, $id);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    
    
?>