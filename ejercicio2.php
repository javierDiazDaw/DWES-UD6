
<?php

    include_once "ejercicio1.php";

    class Trabajador extends Persona{
        private $nombreEmpresa;

        function __construct($nombre, $dni, $sexo, $peso, $altura, $nombreEmpresa){
            parent::__construct($nombre, $dni, $sexo, $peso, $altura);
            $this->nombreEmpresa = $nombreEmpresa;
        }

        function getNombreEmpresa(){
            return $this->nombreEmpresa;
        }
        
        function setNombreEmpresa($nombreEmpresa){
            $this->nombreEmpresa=$nombreEmpresa;
        }    
       
        function mostrar(){
            echo $this->nombreEmpresa;
        }
        
        function mostrarCompleto(){
            echo parent::mostrar()  . $this->nombreEmpresa;
        }
    }

        $t2 = new Trabajador("Jose"," 12345678 "," Hombre "," 75kg ","1,80, "," Rpuestos Manolito ", );

        $t2->mostrarCompleto();
?>
   
