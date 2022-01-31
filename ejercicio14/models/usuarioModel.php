<?php
    function getConnection(){
        $usuario = "developer";
        $pass = "developer";
        return new PDO('mysql:host=localhost;dbname=musica', $usuario, $pass);
    }

    /*
    * Obtenemos todos los datos del usuario solicitado.
    */
    function getUser($username) {
        try {

            $db = getConnection();
            $result = $db->prepare("SELECT * FROM usuario WHERE usuario = ?");           
            $result->bindParam(1, $username);
            $result->execute();
            
        return $result->fetch();
        } catch (PDOException $e) {
            return false;
        }        
    }



    /*
    * Login.
    */
    // function comprobarUsuario($usuario, $contrasenia) {

    //     $user = getUser($usuario);

    //     // Realizamos la verificacion de la contraseña.
    //     $result = password_verify($contrasenia, $user['contrasenia']);

    //     return $result;
    // }
?>