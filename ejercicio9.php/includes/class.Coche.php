<?php   
    class Coche extends Cuatro_ruedas{

        var int $numero_cadenas_nieve; 

        function __construct($color, $peso, $numero_puertas, $numero_cadenas_nieve){
            parent::__construct($color, $peso, $numero_puertas);
            $this->numero_cadenas_nieve = $numero_cadenas_nieve;
        }

        public function __get($atributo)
        {
            return $this->$atributo;
        }
    
        public function __set($atributo, $valor)
        {                  
            $this->$atributo=$valor; 
        }
        
        function poner_gasolina($litros){
            $this->peso =$litros*1.5+$this->peso=$litros;
            
        }
        
    }

?>