<?php
// static nos permite acceder a propiedades y metodos sin tener que instanciarlos
class Persona {
    public static $dia = '22 de mayo';
    public static function saludo($nombre = null){// como buena practica hay que poner static, sin el igual se puede acceder, pero es mala practica
       // igual a null, en caso de que no llegue ningun parametro
        if($nombre)
        return 'hola ' . $nombre . '<br>';
        else
        return 'hola desconocido' . '<br>';
    }
}
//$hi = new Persona; // no es necesaria con static
// echo $hi->dia; //marcara error

//echo Persona::$dia;// sin  necesidad de instanciar
//echo Persona::saludo();// funciona igual con metodos
 echo Persona::saludo();// sin necesidad de mandar parametro
echo Persona::saludo('martin');

// estas funciones de static y $nombre=null nos ayudaran a no poner mas codigo

?>