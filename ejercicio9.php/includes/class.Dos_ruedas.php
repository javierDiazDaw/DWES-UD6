<?php   
    class Dos_ruedas extends Vehiculo{

        var int $cilindrada; 

        function __construct($color, $peso, $cilindrada){
            parent::__construct($color, $peso);
            $this->cilindrada = $cilindrada;
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