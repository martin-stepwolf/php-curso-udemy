<?php

//lo que se haria sin la programacion orientada a objetos
//$nombre = 'martin';
//$edad = 39;
//$pais  = 'mexico';
//al tener mas personas las variables por lo general irian de $nombre2, nombre$3, etc, seria un problemaa tener miles 
//eso seria como un codigo espageti

// lo que se haria con poo
// lo correcto es definir como plantillas conocidas mas bien como clases
class Persona{
    public $nombre;
    public $edad;
    public $pais;
    //esas variables se pusieron ya que todas tienen nombre, edad y pais
  public function mostrarinformacion(){
  echo 'hola mundo';
  } 
}
// ahora creamos el objeto, este objeto tendra variables(conocidas mejor como propiedades) y funciones(mejor llamadas metodos) que podemos ejecutar

$carlos = new Persona; //carlos tiene acceso a las propiedades de personas
$carlos->nombre = 'Carlos arturo';
$carlos->edad = 23;
$carlos->pais = 'mexico';
$carlos->mostrarinformacion();

?>