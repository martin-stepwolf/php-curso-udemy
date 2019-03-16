<?php 
//las variables son sensibles a min y may, siempre empiezan con el simbolo de dolar, no pueden tener espacios, caracteres especiales ni empezar por numero
//string
$nombre = "Martin";
//integer
$numero = 19;
//double
$numero_decimal = 9.9;
//boolean
$boolean = true;
//podemos almacenar cadenas de texto(encerradas con comillas dobles o sencillas, las dos sin diferentes)
//no es necesario especificar el tipo de variable a guardar como en javascrip
//null es un valor que toma una variable que no tiene valor, definida asi no mas.
echo $nombre;
echo $numero;
echo $numero_decimal;
echo $boolean;  

//diferencias de comillas simples y dobles
echo "hola $nombre";// capta las variables, puede haber problemas de seguridad, no recomendable
echo 'hola $nombre';//muestra literal lo que tiene
echo 'hola '. $nombre;// forma de concatenar, no se unsa el + como en otros lenguajes

//mostrar el tipo de una variable
echo gettype($nombre);
?>