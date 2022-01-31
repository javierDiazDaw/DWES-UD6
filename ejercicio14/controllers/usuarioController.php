<?php

session_start();

if (!empty($_SESSION["usuario"])) {        
    header("Location: index.php?controller=canciones&action=listar");
}


    function login(){
        require './models/usuarioModel.php'; 
        $error = "";
        $usuario = "";        
        
       
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $usuario = $_POST['usuario'];
           $contrasenia = $_POST['contrasenia'];

           //no poner el mismo nomnre que en las funciones de conexion        
            $loguear = getUser($usuario);

            if ($loguear) {

                $comprobacion = password_verify($contrasenia, $loguear['contrasenia']);

                if ($comprobacion) {
                    $nombre = $loguear["usuario"];
                    $_SESSION["usuario"] = $nombre;
                    header("Location: index.php?controller=canciones&action=listar");
            
                }else{
                    $error = "Usuario y contraseña incorrecta";
                    $_SESSION["usuario"] = "";  
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
