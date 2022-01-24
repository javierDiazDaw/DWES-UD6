<?php

    function listar(){
        require './models/periodicosModel.php';
    $periodicos = getPeriodicos();
    include './views/periodicoListar.php';
    }

    function unPeriodico(){
        require './models/periodicosModel.php';
        $id= $_GET["id"];
        $periodicos = mostrarPeriodico($id);
        require './views/unPeriodico.php';

    }
    
    
?>