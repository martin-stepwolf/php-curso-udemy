<?php
//scope o habito de las variables
//una funcion no puede acceder a una variable que esta afuera de ella, e inversamente
//las variables globales, se puede acceder a ellas en cualquier parte menos en las funciones, solo pasandolas por parametros
//las variables locales son las que estan adentro de una funcion, solo puede salir mediante return
//por lo regular dice variable indefinida

//$martin = 12;
//function a(){
//    $a= 12;
//    echo $martin;//error
//}
//echo $a;//error

$jose = 13;
function b($valor){
    $b= 12;
    echo $valor; //correcto
    return $b;
}
echo b(10);//correcto

?>