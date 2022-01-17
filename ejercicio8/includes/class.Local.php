<?php

    class Local{
        private /*string*/ $ciudad;
        private /*string*/ $calle;
        private /*int*/ $nPlantas;        
        private /*Dimensiones*/ $dimensiones;
        

        function __construct($ciudad, $calle, $nPlantas, $dimensiones){
            
            if(is_string($ciudad)){
                $this->ciudad=$ciudad;
            }else{
                echo "Error en el atributo ciudad";
                die();
            }
            
            if(is_string($calle)){
                $this->calle=$calle;
            }else{
                echo "Error en el atributo calle";
                die();
            }

            if(is_integer($nPlantas) && $nPlantas >= 1 && $nPlantas <=10){
                $this->nPlantas=$nPlantas;
            }else{
                echo "Error en el atributo numero de plantas";
                die();
            }
          
            if($dimensiones instanceof Dimensiones){
                $this->dimensiones=$dimensiones;
            }else{
                echo "Error en el atributo dimensiones";
                die();
            }   
        }   

        //consultor = get()
        public function __get($atributo){
            return $this->$atributo;
        }

              
        function __toString()
        {
            return "<p>Ciudad: " . $this->ciudad . "<br></p><p>Calle: " . $this->calle . 
            "<br></p><p>Plantas: " . $this->nPlantas . "<br></p><p>Dimensiones: (" . 
            $this->dimensiones . ")<br></p>" ;
        }

        function __clone()
        {
            $this->dimensiones = clone $this->dimensiones;
            
        }

        

    }

?>