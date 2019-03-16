<?php
// ?? operador
//$nombre =isset($_GET['nombre']) ? $_GET['nombre'] : 'anonimo'; // visto ya en clases pasadas
$nombre = $_GET['nombre'] ?? 'anonimo';// hace lo mismo que la de arriba
echo $nombre;


?>