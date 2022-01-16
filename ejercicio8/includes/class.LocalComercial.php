<?php
    class LocalComercial extends Local{
        private string $razonSocial;
        private string $numeroLicencia; 

        function __construct($ciudad, $calle, $nPlantas, 
        $dimensiones, $razonSocial, $numeroLicencia){

            parent::__construct($ciudad, $calle, $nPlantas, $dimensiones);

            if(is_string($razonSocial)){
                $this->razonSocial=$razonSocial;
            }else{
                echo "Error en el atributo razon social";
            }

            if(is_string($numeroLicencia)){
                $this->numeroLicencia=$numeroLicencia;
            }else{
                echo "Error en el atributo numero licencia";
            }
        }
        
        function __toString()
        {
            return "<p>" . parent::__toString() . "</p><p>Razón Social: " . 
            $this->razonSocial . "<br></p><p>Número de Licencia: " . $this->numeroLicencia . 
            "<br></p>";
        }
        
    }
     
    
?>