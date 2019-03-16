<?php

//con isset podemos saber si una variable tiene un valor o no
//lo primero es la condicion, ante de los : es si se cumple y despues es si no se cumple
$edad = isset(($edad)) ? $edad : 'el usuario no establecio su edad';
echo 'edad '. $edad;

?>