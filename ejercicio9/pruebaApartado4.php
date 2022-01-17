<?php

    spl_autoload_register(function($name) {
        include_once ('includes/class.' . $name . '.php');
    });
    
    echo "DOS RUEDAS: ";
    echo "<br>"; 
    $m1 = new Dos_ruedas("Transparente", 1550, 6);
    $m1->añadir_persona(70);
    $m1->poner_gasolina(0); 
    echo "Color: " . $m1->color;
    echo "<br>";
    echo "Peso: " . $m1->peso;
    echo "<br>"; 
    $m1->color = "Verde";
    //echo "Color: " . $m1->color;
    echo "<br>"; 
    $m1->cilindrada = 1000;
    //echo "Cilindrada: " . $m1->cilindrada;
    $m1->ver_atributo($m1);
    echo "<br>";

    echo "CAMION: ";
    echo "<br>"; 
    $ca1 = new Camion("Blanco", 6000, 0, 0);
    $ca1->añadir_persona(84);
    $ca1->repintar("Azul");
    $ca1->numero_puertas = 2;
    //Opcion a válida
    Vehiculo::ver_atributo($ca1);    
    //Opcion b no válida
    //$ca1->ver_atributo($ca1);    
    echo "<br>"; 
    
?>