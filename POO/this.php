<?php

$nombre = 'martin';
$edad = 39;
$pais  = 'mexico';

class Persona{
    public $nombre;
    public $edad;
    public $pais;
    public function mostrarinformacion(){
        echo $this->nombre. ' tiene ' . $this->edad .' y es de '. $this->pais;
        //this permite acceder a las variables de la clase y poderlas usar en la funcion    
    }
}

$carlos = new Persona; 
$carlos->nombre = 'Carlos arturo';
$carlos->edad = 23;
$carlos->pais = 'mexico';
$carlos->mostrarinformacion();


//la programacion orientada a objetos nos ayuda a no estar copiando y pegando codigo
//al trabajar con clases es recomendable usar la primer letra mayuscula
?>