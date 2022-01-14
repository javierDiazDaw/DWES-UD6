<?php   
    class Cuatro_ruedas extends Vehiculo{

        var string $numero_puertas; 

        function __construct($color, $peso, $numero_puertas){
            parent::__construct($color, $peso);
            $this->numero_puertas = $numero_puertas;
        }

        public function __get($atributo)
        {
            return $this->$atributo;
        }
    
        public function __set($atributo, $valor)
        {                  
            $this->$atributo=$valor; 
        }

        
        
        function repintar($color){
            $color = $this->color;
            return $color;
        }
        
    }

?>