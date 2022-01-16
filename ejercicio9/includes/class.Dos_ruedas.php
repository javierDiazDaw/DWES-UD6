<?php   
    class Dos_ruedas extends Vehiculo{

        var $cilindrada; 

        function __construct($color, $peso, $cilindrada){
            parent::__construct($color, $peso);
            $this->cilindrada = $cilindrada;
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
        
        function poner_gasolina($litros){
            $this->peso = $litros*1.5+$this->peso;
            
        }

        function añadir_persona($peso_persona){
            $this->peso = $this->peso + $peso_persona + 1.5;
        } 
        
    }

?>