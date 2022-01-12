<?php

    include_once "class.dimensiones.php";
    class Local{
        private string $ciudad;
        private string $calle;
        private int $nPlantas;        
        private Dimensiones $dimensiones;
        

        function __construct($ciudad, $calle, $nPlantas, $dimensiones){
            
            if(is_string($ciudad)){
                $this->ciudad=$ciudad;
            }else{
                echo "Error en el atributo ciudad";
            }
            
            if(is_string($calle)){
                $this->calle=$calle;
            }else{
                echo "Error en el atributo calle";
            }

            if(is_int($nPlantas) && $nPlantas > 1 && $nPlantas <11){
                $this->nPlantas=$nPlantas;
            }else{
                echo "Error en el atributo numero de plantas";
            }
          
            if($dimensiones instanceof Dimensiones){
                $this->dimensiones=$dimensiones;
            }else{
                echo "Error en el atributo dimensiones";
            }   
        }   

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo=$valor;
        }

        function __toString()
        {
            return "<p>Ciudad: <" . $this->ciudad . "><br></p><p>Calle: <" . $this->calle . 
            "><br></p><p>Plantas: <" . $this->nPlantas . "><br></p><p>Dimensiones: (<" . 
            $this->dimensiones . ">)<br></p>" ;
        }

        function __clone()
        {
            $this->dimensiones = clone $this->dimensiones;
            
        }

    }

    $d1 = new Dimensiones(2,3,4);
    $l1 = new Local ("Sevilla", "calle", 2,$d1);
    var_dump($d1 instanceof Dimensiones);

?>