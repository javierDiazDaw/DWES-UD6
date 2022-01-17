<?php

    /*con abstract no hace falta implementar todos los metodos
    de la interfaz a la clase vehiculo*/
    abstract class Vehiculo implements IVehiculo{

        private $color;
        private $peso;
        protected static $numero_cambio_color = 0;
        
        function __construct($color, $peso)
        {
            $this->color = $color;
            $this->peso = $peso;    
        }

        public function __get($atributo)
        {
            return $this->$atributo;
        }
    
        public function __set($atributo, $valor){                  
            $this->$atributo=$valor;
            
            switch($atributo){
                case "color":
                    $this->setColor($valor);
                case "peso":
                    if($valor<2100)
                        $this->$atributo=$valor;
                    else
                        echo "Error: el peso total no debe superar 2100 kilos. <br>";                        
                    break;
            }            
        }

        /**
         * Self hace referencia a la clase actual y se usa cuando instancia dicha clase, 
         * es decir se usan métodos estáticos.
         * 
         * This hace referencia al objeto actual, es decir, cuando una clase si tiene instancia. 
         * No se puede hacer referencia a métodos estáticos usando this pero si a métodos 
         * públicos, privados y protegidos.
         * 
         * https://blogprog.gonzalolopez.es/articulos/cuando-usar-self-o-this-en-php.html
         */
     
        public function setColor($color){
            $this->color = $color;
            self::$numero_cambio_color += 1;
        }

        public function setPeso($peso){
            
            if (($this->peso + $peso) <= 2100){
                $this->peso = $peso;
            }else{
                echo ("Error: el peso total no debe superar 2100 kilos. ");
                die();
            }            
        }

        function circula()
        {
            echo "El vehículo está circulando";
        }

        public abstract function añadir_persona($peso_persona);

        public static function ver_atributo($objeto){
            echo "Color: " . $objeto->color;
            echo "<br>";
            echo "Peso: " . $objeto->peso;
            echo "<br>";
            echo "Numero cambio de color: " . self::$numero_cambio_color;
            echo "<br>";

            /*el metodo get_class se usa para mencionar
            a la clase cuyo objeto se encuentra como parámetro*/

            if(get_class($objeto)== "Cuatro_ruedas" || get_class($objeto)== "Camion" || get_class($objeto)== "Coche"){
                echo "Numero de puertas: " . $objeto->numero_puertas;
                echo "<br>";
            }

            if(get_class($objeto)== "Coche"){
                echo "Numero de cadenas nieve: " . $objeto->numero_cadenas_nieve;
                echo "<br>";
            }

            if(get_class($objeto)== "Dos_ruedas"){
                echo "Cilindrada: " . $objeto->cilindrada;
                echo "<br>";
            }

            if(get_class($objeto)== "Camion"){
                echo "Longitud: " . $objeto->longitud;
                echo "<br>";
            }
        }        
    }
?>

