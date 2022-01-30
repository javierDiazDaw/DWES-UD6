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
            $result = $db->prepare("SELECT * FROM usuario WHERE username = ?");           
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
    function login($usermane, $password) {

        $user = getUser($usermane);

        // Realizamos la verificacion de la contraseña.
        $result = password_verify($password, $user['password']);

        return $result;
    }
?>