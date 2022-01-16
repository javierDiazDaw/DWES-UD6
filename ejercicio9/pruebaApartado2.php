<?php

    spl_autoload_register(function($name) {
        include_once ('includes/class.' . $name . '.php');
    });

    $v1 = new Vehiculo("Rojo", 450);
    $v1->circula();
    echo "<br>";
    $v1->añadir_persona(111);

?>  