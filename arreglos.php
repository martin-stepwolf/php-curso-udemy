<?php

//variable con multiples valores
//se puede guardar objetos, strings, numeros, etc.
//la primer posicion es 0
$semana  = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');
echo $semana[0];
//cambiar valor
$semana[0]='LUNES';
echo $semana[0];

$semana2 = ['lunes','martes','miercoles','jueves','viernes','sabado','domingo'];//segunda forma, mas nueva
echo $semana2[6];

//arreglo basico, este fue un arreglo indexado
//asociativo, indexivos, multidimensionales, arreglos mas complejos


//con la funcion extract en los arreglos asociativos, si modificamos la variable creada tambien se modificara el espacio del arreglo
?>