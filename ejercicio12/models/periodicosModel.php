<?php

    function getConnection(){
        $user='developer';
        $password = 'developer';
        return new PDO('mysql:host=localhost;dbname=periodico', $user, $password);
    }

    function getPeriodicos(){
        $db = getConnection();
        $result = $db->query('SELECT nombre, fecha FROM periodico');
        $libros = array ();
        while ($libro = $result->fetch())
        $libros[] = $libro;

        return $libros;
    }

    function mostrarPeriodico($id){
        $db = getConnection();
        $result = $db->prepare('SELECT * FROM periodico WHERE id = ?');
        $result->bindParam(1, $id);
        $result->execute();
        $libros = array ();
        while ($libro = $result->fetch())
        $libros[] = $libro;

        return $libros;
    }
    
    
?>