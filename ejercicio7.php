<?php
abstract class  FiguraGeometrica{

    private string $color;

    function __construct($color){
        $this->color = $color;
    }

    abstract function dibuja();
    abstract function area();
}

class Cuadrado extends FiguraGeometrica{

    private string $tipoFigura = "cuadrado";
    private float $lado = 4; 

    function __construct($color, $tipoFigura, $lado){
        parent::__construct($color);
        $this->tipoFigura = $tipoFigura;
        $this->lado = $lado;           
    }

    function dibuja(){
        echo $this->tipoFigura . " " . $this->color; 
    }

    function area(){
        return $this->lado * $this->lado;
    }
}

class Triangulo extends FiguraGeometrica{

    private string $tipoFigura = "triangulo";

    function __construct($color, $tipoFigura){
        parent::__construct($color);
        $this->tipoFigura = $tipoFigura;           
    }

    function dibuja(){
        echo $this->tipoFigura . " " . $this->color;
    }

    function area(){

    }
}

class Circulo extends FiguraGeometrica{

    private string $tipoFigura = "circulo";

    function __construct($color, $tipoFigura){
        parent::__construct($color);
        $this->tipoFigura = $tipoFigura;           
    }

    function dibuja(){
        echo $this->tipoFigura . " " . $this->color;
    }

    function area(){

    }
}
?>