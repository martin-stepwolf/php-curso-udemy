<?php
// no es necesario poner el tipo de variable como en otros lenguajes
function saludo($nombre){
    return "hola, $nombre"; 
//abajo de return ya no hace nada
    //solo se puede retornar un solo valor
}
$resul = saludo("Carlos");
echo $resul;

//es recomendable que las funciones solo hagan operaciones, no muestren en pantalla
// hay que tratar que solo hagan una cosa 
?>