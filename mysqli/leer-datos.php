<?php
// Realizamos una conexion a la base de datos.
$conexion = new mysqli('localhost', 'root', '', 'prueba');

// Nos retorna un codigo de error o si todo esta bien regresa 0.
// echo $conexion->connect_errno;

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	// $id = isset($_GET['id']) ? $_GET['id'] : 1;
	// $sql = "SELECT * FROM usuarios WHERE ID = $id";// al poner $id va ha haber problemas de seguridad, se debe usar prepare statement
	$sql = "SELECT * FROM usuarios";
	$resultado = $conexion->query($sql);// con la consulta de arriba el usuario no puede inyectar codigo
	
	if($resultado->num_rows){// si existe un resultado en la consulta
		// echo '<pre>';
		// var_dump($resultado->fetch_assoc());
		// echo '</pre>';

		while($fila = $resultado->fetch_assoc()){// mientras haiga resultados
			echo $fila['id'] . ' - ' . $fila['nombre'] . '<br />';
		}
       // echo $resultado->fetch_assoc()['nombre'];// al ser un arreglo podemos traer un valor especifico de uana columna especifica

	} else {
		echo 'No hay datos';
	}
}