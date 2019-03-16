<?php
//compara funciones <=> operador de nave espacial, asi se le llamo por que se parece a una nave de star wars
//echo 1 <=> 1; da 0 por que es igual
$numeros = [78,1,3,4,90];

//sort($numeros); en caso de que no existiera esta funcion se puede hacer lo siguiente

function comparar($a,$b){
    return $a <=> $b;
}
usort($numeros, 'comparar');// el segundo parametro es la base de como ordenara los valores de la primer variable
print_r($numeros);
?>