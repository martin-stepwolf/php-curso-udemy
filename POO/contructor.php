<?php

class Persona{
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre,$edad,$pais){//este metodo se ejecutara siempre que se haga una instancia de una clase
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
        //nos aprovechamos de el para rellenar los valores
    }
    
    public function mostrarinformacion(){
        echo $this->nombre. ' tiene ' . $this->edad .' y es dee '. $this->pais;
    }
}

$carlos = new Persona('casi', 23, 'mexico');//carlos es una nueva instancia de persona 
//se le pasan los parametros, para la hora de crearse la instancia las reciba el metodo contructor

//$carlos->nombre = 'Carlos arturo';
//$carlos->edad = 23;
//$carlos->pais = 'mexico';
//igual se puede seguir teniendo acceso a esta forma tradicional,

$carlos->mostrarinformacion();

?>