<?php


    
    class Cuatro_ruedas extends Vehiculo{

        var $numero_puertas; 

        function __construct($color, $peso, $numero_puertas){
            parent::__construct($color, $peso);
            $this->numero_puertas = $numero_puertas;
        }

        public function __set($name, $value){
            if (property_exists(get_class(),$name)) {
                $this->$name=$value;
             }else{
                parent::__set($name,$value);
             }        }

        public function __get($name){
            if (property_exists(get_class(),$name)) {
               return $this->$name;
            }else{
               return parent::__get($name);
            }
        }
        
        function repintar($color){
            $this->color = $color;            
        }

        function añadir_persona($peso_persona){
            $this->peso += $peso_persona;  
        } 
    }

    

?>