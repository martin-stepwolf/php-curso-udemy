<?php

error_reporting(0);//en caso de que haiga un error el archivo json no se cargue
header('Content-type: application/json; charset=utf-8');//para poder leer bien los archivos json

$conexion = new mysqli('localhost', 'root', '', 'curso_php_ajax');

if($conexion->connect_errno){//cuidado con no poner error en vez de errno
	$respuesta = [
		'error' => true
	];
} else {
	$conexion->set_charset("utf8");// tanto para enviar como para recibir datos compatiblemente con los caracteres
	$statement = $conexion->prepare("SELECT * FROM usuarios");
	$statement->execute();
	$resultados = $statement->get_result();
	
	$respuesta = [];
	
	while($fila = $resultados->fetch_assoc()){
		$usuario = [
			'id' 		=> $fila['ID'],
			'nombre' 	=> $fila['nombre'],
			'edad'		=> $fila['edad'],
			'pais'		=> $fila['pais'],
			'correo'	=> $fila['correo']
		];
		array_push($respuesta, $usuario);//para concatenar
	}
}

echo json_encode($respuesta);