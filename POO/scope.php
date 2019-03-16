<?php
// las propiedades y metodos de una clase pueden tener los siguientes scopes:
//public  se podra acceder desde cualquier parte del codigo, afuera o dentro de la clase
//protected  se podra acceder solo desde dentro de la clase y sus herencias, pero no fuera de estas
//privated  se puede acceder a ella solo sobre la clase creada, las heredadas y por fuera de la clase no se puede
class Persona{
    public $nombre;
    private $edad;
    protected $pais;
    
    function __construct($nombre,$edad,$pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }
    
    public function mostrarinformacion(){
        return $this->nombre. ' tiene ' . $this->edad .' y es de '. $this->pais . '<br>';
    }
}

$martin = new Persona('martin', 5, 'mexico');
echo $martin->mostrarinformacion();
echo $martin->pais;// no se podra por que es una propiedad protegida, siendo privada funciona igual

//ejemplos con herencias omitidos, la creacion de un nuevo constructor donde su padre tiene variables privadas es un tema aun curioso y excede el curso, pendiente de hacer
?>