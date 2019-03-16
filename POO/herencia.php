<?php
//la herencia nos ayudara al crear clases que son muy similares
class Persona{
    public $nombre;
    public $edad;
    public $pais;
    //public $carrera, no es logico ponerlo ya que no todas las personas tienen una carrera, por lo que mejor se crea una clase llamada estudiante
    
    function __construct($nombre,$edad,$pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }
    
    public function mostrarinformacion(){
        return $this->nombre. ' tiene ' . $this->edad .' y es de '. $this->pais . '<br>';
    }
}


//lo correcto es heredar las propiedades y los metodosde la clase persona
class Estudiante extends Persona{//aqui podemos sobreescribir todo lo que ya tiene de persona
    function __construct($nombre,$edad,$pais, $carrera){
        parent::__construct($nombre, $edad, $pais);// es lo mismo que pegar todo el  metodo contructor de persona
        $this->carrera = $carrera;
    }    
}

class Trabajador extends Persona{//aqui podemos sobreescribir todo lo que ya tiene de persona
    function __construct($nombre,$edad,$pais, $trabajo){
        parent::__construct($nombre, $edad, $pais);// es lo mismo que pegar todo el  metodo contructor de persona
        $this->trabajo = $trabajo;
    }    
}

$martin = new Persona('martin', 5, 'mexico');
echo $martin->mostrarinformacion();
$jaime = new Estudiante('martin', 5, 'mexico', 'electricidad');
echo $jaime->carrera;
$jose = new Trabajador('martin', 5, 'mexico','electricista');
echo $jose->trabajo;




//si estamos copiando y pegando mucho codigo algo estamos haciendo mal
//los echo es mejor ponerlos afuera de las funciones, y adentro de las funciones un return

/*
class Estudiante{
    public $nombre;
    public $edad;
    public $pais;
    public $carrera;
    //public $carrera, no es logico ponerlo ya que no todas las personas tienen una carrera, por lo que mejor se crea una clase llamada estudiante
    
    function __construct($nombre,$edad,$pais,$carrera){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
        $this->carrera = $carrera;
    }
    
    public function mostrarinformacion(){
        return $this->nombre. ' tiene ' . $this->edad .' y es dee '. $this->pais.' y es ' . $this->carrera;
    }
}
*/ // clase estudiante de la manera no correcta
?>