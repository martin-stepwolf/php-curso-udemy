<?php
// las clases abstractas son una forma de proteger una clase
// de esta manera esa clase no puede ser instanciada ni accedida, solo se puede heredar, y en esa herencia si se puede heredar.
abstract class Persona {
    public function saludo(){
        return 'hola';
    }
}
class Estudiante extends Persona{
    
}
$hi = new Estudiante;// al no tener constructor, no es necesario poner los parentesis
echo $hi->saludo();

//toda funcion siempre lleva los parentesis
// las clases abstractas no son comunes, pero por seguridad es necesario aprenderla
?>