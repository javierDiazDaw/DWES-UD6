<?php
 class Camion extends Cuatro_ruedas{

    var $longitud; 

        function __construct($color, $peso, $numero_puertas, $longitud){
            parent::__construct($color, $peso, $numero_puertas);
            $this->longitud = $longitud;
        }

        public function __set($name, $value){
            if (property_exists(get_class(),$name)) {
                $this->$name=$value;
            }else{
                parent::__set($name,$value);
            }    
        }

        public function __get($name){
            if (property_exists(get_class(),$name)) {
               return $this->$name;
            }else{
               return parent::__get($name);
            }
        }        
        
        function añadir_remolque($longitud_remolque){
            $this->longitud = $this->longitud + $longitud_remolque;
        }
 }
?>