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

    private string $tipoFigura;
    private float $lado; 

    function __construct($color, $tipoFigura, $lado){
        $this->color = $color;
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

    private string $tipoFigura;
    private float $base;
    private float $altura;

    function __construct($color, $tipoFigura, $base, $altura){
        $this->color = $color;
        $this->tipoFigura = $tipoFigura;      
        $this->base = $base;
        $this->altura = $altura;     
    }

    function dibuja(){
        echo $this->tipoFigura . " " . $this->color;
    }

    function area(){
        return ($this->base * $this->altura)/2;

    }
}

class Circulo extends FiguraGeometrica{

    private string $tipoFigura;
    private float $radio;

    function __construct($color, $tipoFigura, $radio){
        $this->color = $color;
        $this->tipoFigura = $tipoFigura;   
        $this->radio = $radio;            
    }

    function dibuja(){
        echo $this->tipoFigura . " " . $this->color;
    }

    function area(){
        return ($this->radio * $this->radio*pi());
    }
}

    $cuadrado = new Cuadrado("rojo","Cuadradito", 3);    
    $triangulo = new Triangulo("azul", "Triangulito", 10, 2);    
    $circulo = new Circulo("verde", "Circulito", 4);

    echo $cuadrado->Area();
    echo $cuadrado->dibuja();
    echo "<br>";
    echo $triangulo->Area();
    echo $triangulo->dibuja();
    echo "<br>";
    echo $circulo->Area();
    echo $circulo->dibuja();
    echo "<br>";
    

?>