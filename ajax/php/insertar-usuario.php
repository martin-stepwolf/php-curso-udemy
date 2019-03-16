<?php

error_reporting(0);//para que no muestre un error en pantalla
header('Content-type: application/json; charset=utf-8');

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$pais = $_POST['pais'];
$correo = $_POST['correo'];

function validarDatos($nombre, $edad, $pais, $correo){
	if($nombre == ''){
		return false;
	} elseif($edad == '' || is_int($edad)){
		return false;
	} elseif($pais == ''){
		return false;
	} elseif($correo == ''){
		return false;
	}
	return true;
}

function limpiarDatos($datos){
	// Eliminamos los espacios en blanco al inicio y final de la cadena
	$datos = trim($datos);

	// Quitamos las barras / escapandolas con comillas
	$datos = stripslashes($datos);

	// Convertimos caracteres especiales en entidades HTML (&, "", '', <, >)
	$datos = htmlspecialchars($datos);
	return $datos;
}
$nombre= limpiarDatos($nombre);
$edad= limpiarDatos($edad);
$pais = limpiarDatos($pais);
$correo = limpiarDatos($correo);



if(validarDatos($nombre, $edad, $pais, $correo)){
	$conexion = new mysqli('localhost', 'root', '', 'curso_php_ajax');
	$conexion->set_charset('utf8');

	if($conexion->connect_errno){
		$respuesta = ['error' => true];
	} else {
		$statement = $conexion->prepare("INSERT INTO usuarios(nombre, edad, pais, correo) VALUES(?,?,?,?)");
		$statement->bind_param("siss", $nombre, $edad, $pais, $correo);//primerose define el tipo de los datod
		$statement->execute();

		if($conexion->affected_rows <= 0){
			$respuesta = ['error' => true];
		}

		$respuesta = [];//se coloca donde ya sabemos que todo es correcto
	}
} else {
	$respuesta = ['error' => true];
}

echo json_encode($respuesta);