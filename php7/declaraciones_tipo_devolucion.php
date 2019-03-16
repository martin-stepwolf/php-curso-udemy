<?php
//
//declare(strict_types=1);// esta funcion hara que el retorno tenga que ser int, aunque en string parezca numero, es util para seguridad
function edad() : int{// el int declara de que tipo sera el variable a retornar, si es un string con numero igual funciona
    $edad = 23;
    //$edad = 'carlos tiene 23';// esto causara un error
    return $edad;
}
echo edad();
?>