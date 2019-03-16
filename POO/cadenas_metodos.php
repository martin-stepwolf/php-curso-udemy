<?php
// util para ahorrar mas codigo cuando de un objeto queremos hacer muchos de sus metodos a la vez.
class Persona{
    public $nombre;
    public $edad;
    public $pais;
    function __construct($nombre,$edad,$pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }
    public function mostrarNombre(){
        echo 'su nombre es ' . $this->nombre.'<br>';
        return $this;
    }
    public function mostrarEdad(){
        echo 'su edad es ' . $this->edad.'<br>';
        return $this;
    }
    public function mostrarPais(){
        echo 'su pais es ' . $this->pais.'<br>';
        return $this;
    }
}

$martin = new Persona('martin', 5, 'mexico');
$martin->mostrarNombre()->mostrarEdad()->mostrarPais();

// es necesario poner ese return para poder encadernar metodos.

?>