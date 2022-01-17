<?php

    spl_autoload_register(function($name) {
        include_once ('includes/class.' . $name . '.php');
    });
    
    echo "COCHE: ";
    echo "<br>"; 
    $c1 = new Coche("Verde", 2100, 4, 1);
    $c1->añadir_persona(80);
    $c1->añadir_cadenas_nieve(2);
    $c1->color="Azul";
    $c1->quitar_cadenas_nieve(4);
    $c1->color="Negro";
    Vehiculo::ver_atributo($c1);   
      
?>