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
            echo "nombre Empresa: " . $this->nombreEmpresa;
        }
        
        function mostrarCompleto(){
            echo parent::mostrar() . "nombre Empresa" . $this->nombreEmpresa;
        }

        function __toString()
        {
            return parent::__toString() . ", " . $this->nombreEmpresa;
        }
    }

    $t3 = new Trabajador("sara","12345678","Hombre","75kg","1,80", "empresa Jose");

       echo $t3;
?>