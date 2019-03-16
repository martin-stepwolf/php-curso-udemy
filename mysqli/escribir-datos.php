<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$sql = "INSERT INTO usuarios(ID, nombre, edad) VALUES(null, 'Daniel', 50)";// lo ideal es poner comillas dobles afuera y sencillas adentro
	$conexion->query($sql);
	if($conexion->affected_rows >= 1){
		echo 'Filas agregadas: ' . $conexion->affected_rows;// para estar seguros de que si se hizo algo
	}
}