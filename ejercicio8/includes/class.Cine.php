<?php
    class Cine extends LocalComercial{
        
        private int $aforoSala;

        function __construct($ciudad, $calle, $nPlantas, 
        $dimensiones, $razonSocial, $numeroLicencia, $aforoSala){


            parent::__construct($ciudad, $calle, $nPlantas, 
            $dimensiones, $razonSocial, $numeroLicencia);

            if(is_int($aforoSala)){
                $this->aforoSala=$aforoSala;
            }else{
                echo "Error en el atributo aforo sala";
            }
            
        }

        function __toString(){
            return "<p>" . parent::__toString() . "</p><p>Aforo: " . $this->aforoSala . "<br></p>";

        }  
    }
?>