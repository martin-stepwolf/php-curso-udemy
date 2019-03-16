<?php
$texto = '<b>hola</b>';
// comnvierte el codigo en entidades especiales para html, protegiendo el codigo
echo htmlspecialchars($texto);
echo '<br>';
//elimina los espacios en blanco al inicio y al final
echo trim($texto);
echo '<br>';
//cuenta los caracteres
echo strlen($texto);
echo '<br>';
// el primer valor es desde donde corta y el segundo los caracteres a mostrar
echo substr($texto, 3,5);
echo '<br>';
// convierte a mayuscula
echo strtoupper($texto);
echo '<br>';
// convierte a minuscula
echo strtolower($texto);
echo '<br>';
// el segundo parametro es la variable a buscar, retorna su posicion, si no encuentra no retorna nada
echo strpos($texto, 'r');

//son las que mas se utilizan
// si no se usa esta forma, el usuario puede inyectar javascript, siendo peligroso
?>