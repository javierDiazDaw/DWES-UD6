<?php

    include_once("./includes/class.Vehiculo.php");

    $v1 = new Vehiculo("Rojo", 450);
    $v1->circula();
    echo "<br>";
    $v1->añadir_persona(111);

?>