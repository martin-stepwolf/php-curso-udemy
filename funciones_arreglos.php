<?php

$semana  = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');
$martin = array('telefono'=>4490000 ,'edad'=>20,"apellido"=>"campos","pais"=>"mexico");
//para arreglos asociativos, extract adapta el contenido a variables y valores
extract($martin);
echo $telefono;

//array_pop saca el ultimo valor de un arreglo, se elimina del arreglo original
echo array_pop($martin);
echo '<br>';
//join, separa los valores, su separacion se determina por lo que este en el primer parametro
echo join(' - ', $martin);
echo '<br>';
//invierte el arreglo
print_r(array_reverse($semana));
//otras funciones ya vistas, count,sort, rsort
?>