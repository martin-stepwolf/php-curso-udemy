<?php
//
//declare(strict_types=1);// esta funcion hara que el parametro tenga que ser int, aunque en string parezca numero, es util para seguridad
function a(int $valor){// si no se le agrega el int el valor que retorna al ser un string por un string sera 0.
    return $valor*$valor;
}
$numero ='8';// ya sea que es un int o string, php tratara de evaluar que ondas, si ponemos '8asd' igual lo trabajara pero mostrara un warning
echo 'el cuadrado de ' . $numero .' es ' . a($numero);
?>