<?php

    function login(){
        require './models/usuarioModel.php';    

        session_start();     

        $error = "";
        $usuario = "";        
        
       
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $usuario = $_POST['usuario'];
           $contrasenia = $_POST['contrasenia'];

           //no poner el mismo nomnre en las funciones de conexion        
            $loguear = getUser($usuario);

            if ($loguear) {

                $comprobacion = password_verify($contrasenia, $loguear['contrasenia']);

                if ($comprobacion) {
                    session_start();
                header("Location: index.php?controller=canciones&action=listar");
            
                }else{
                    $error = "Usuario y contraseña incorrecta";
                }
               
            }else{
                $error = "Usuario no encontrado";
            }
            
       }    

        include './views/usuario.php';  
        
    }

    function cerrarSesion(){
        
        session_start();
        session_destroy();

        header("Location: index.php?");
    }

    // function formLogin(){       
    //     include './views/usuario.php';       
    // }

?>