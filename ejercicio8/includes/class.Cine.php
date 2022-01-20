<?php
    class Cine extends LocalComercial{
        
        private string $aforoSala;

        function __construct($ciudad, $calle, $nPlantas, 
        $dimensiones, $razonSocial, $numeroLicencia, $aforoSala){


            parent::__construct($ciudad, $calle, $nPlantas, 
            $dimensiones, $razonSocial, $numeroLicencia);

            if(is_integer($aforoSala) && $aforoSala > 0){
                $this->aforoSala=$aforoSala;
            }else{
                echo "Error en el atributo aforo sala";
                die();
            }
            
        }

        /*public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo=$valor;
        }*/

        public function __toString(){
            return "<p>" . parent::__toString() . "</p><p>Aforo: " . $this->aforoSala . "<br></p>";

        }  
    }
?>