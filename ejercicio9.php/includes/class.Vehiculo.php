<?php
    class Vehiculo{

        private string $color;
        private float $peso;

        function __construct($color, $peso)
        {
            $this->color = $color;
            $this->peso = $peso;
        }

        public function __get($atributo)
        {
            return $this->$atributo;
        }
    
        public function __set($atributo, $valor)
        {                  
            $this->$atributo=$valor; 
        }

        function circula()
        {
            echo "El vehículo está circulando";
        }

        function añadir_persona($peso_persona)
        {
            
        }

        function __toString()
        {
            return "Color: " . $this->color. ", peso: " . $this->peso . circula();
        }
    }
?>

