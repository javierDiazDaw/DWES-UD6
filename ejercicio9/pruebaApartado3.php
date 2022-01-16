<?php

    spl_autoload_register(function($name) {
        include_once ('includes/class.' . $name . '.php');
    });
    
    echo "COCHE:";
    echo "<br>";    
    $c1 = new Coche("Azul", 650, 5, 0);        
    echo "Color: " . $c1->color;
    echo "<br>";
    echo "Peso: " . $c1->peso;
    echo "<br>";
    $c1->repintar("Amarillo");
    $c1->añadir_cadenas_nieve(3);
    echo "Nuevo Color: " . $c1->color;
    echo "<br>";
    echo "Numero de cadenas: " . $c1->numero_cadenas_nieve;
    echo "<br><br>";

    echo "DOS RUEDAS: ";
    echo "<br>"; 
    $m1 = new Dos_ruedas("Marrón", 30, 6);
    $m1->añadir_persona(2);
    $m1->poner_gasolina(2000); 
    echo "Color: " . $m1->color;
    echo "<br>";
    echo "Peso: " . $m1->peso; 

?>