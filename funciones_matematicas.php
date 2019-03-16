<?php
$numero = 17.12;
//redondea el numero, el segundo valor es la cantidad de decimales
echo round($numero, 1);
echo '<br>';
//numero aleatorio, el primer valor es de donde empieza y el segundo de donde acaba
echo rand(1,10);
echo '<br>';
//redondea un numero pero siempre hacia arriba
echo ceil($numero);
echo '<br>';
// constante de pi ya definida por php
echo M_PI;
echo '<br>';
//duda sobre como funcionan el echo con una funcion 
function g(){
    return 10;
}
echo g();
?>