<?php

require 'funciones.php';//para reciclar codigo

$conexion = conexion('curso_galeria', 'root', '');
if (!$conexion) {
	// Terminamos con la ejecucion de la pagina si no pudimos conectar.
	// Normalmente lo que hariamos es redirigir a una pagina de error.
	die();
}


$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if (!$id) {// en caso de que no exista la imagen se dirige al index por seguridad
	header('Location: index.php');
}


// Traemos la foto
$statement = $conexion->prepare('SELECT * FROM fotos WHERE id = :id');//encuentra la foto
$statement->execute(array('id' => $id));

$foto = $statement->fetch();

if (!$foto) {// la foto no existe en la base de datos
	header('Location: index.php');
}

require 'views/foto.view.php';

?>