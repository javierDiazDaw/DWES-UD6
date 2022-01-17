<?php
    spl_autoload_register(function($name) {
      include_once ('includes/class.' . $name . '.php');
   });
   
   //requisito para incluir el object dimensiones desde la clase Local
   //include_once ('includes/class.Local.php');
   //$cines[0] = new Cine ("Sevilla", "Asis", 7, $d1, "razon1", "1845", 300);
   $cines[0] = new Cine ("Sevilla", "Asis", 7, new Dimensiones(10.,10.,10.), "razon 1", "1845", 300);
   $cines[1] = new Cine ("Huelva", "Alcatraz", 8, new Dimensiones(10.,10.,10.), "razon 2", "2348", 400);
   $cines[2] = new Cine ("Cadiz", "Siena", 1, new Dimensiones(10.,10.,10.), "razon 3", "5671", 500);

   foreach ($cines as $cine){

      echo $cine . "<br>";
     }
      
   $clonar = clone $cines[1];

   $clonar->dimensiones->alto = 40.;
   $clonar->dimensiones->ancho = 50.;
   $clonar->dimensiones->largo = 60.;

   echo $clonar;    

?>
