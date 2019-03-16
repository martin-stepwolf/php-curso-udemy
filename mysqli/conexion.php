<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion->connect_errno){// la variable si hay un error arroja un numeo de error 
	die('Lo siento hubo un problema con el servidor');// mientras menos informacion le de al usuarios sobre problemas en la base de datos mejor
} else {
	// Codigo
}