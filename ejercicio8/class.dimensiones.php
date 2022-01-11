<?php
class Dimensiones {
    private float $alto;
    private float $ancho;
    private float $largo;

    function __construct($alto, $ancho, $largo)
    {
        $this->alto = $alto;
        $this->ancho = $ancho;
        $this->largo = $largo;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){

        if ($valor < 1){
            echo "ERROR";
        } else{
            $this->$atributo=$valor;
        }
    } 

    function __toString()
    {
        return "alto = " . $this->alto . ", ancho = " . $this->ancho . ", largo = " . $this->largo;
    }
}

?>