<?php

    function login(){
        require './models/usuarioModel.php';
        $loguear = login($usermane, $password);
        
    }

    function formLogin(){
       
        include './views/usuario.php';       
    }

?>