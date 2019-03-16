<?php 
require 'funciones.php';
$conexion = conexion('curso_galeria', 'root', '');

if (!$conexion) {
	// Terminamos con la ejecucion de la pagina si no pudimos conectar.
	// Normalmente lo que hariamos es redirigir a una pagina de error.
	die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {// $_files es un arreglo de archivos, si esta vacia significa que no envio el archivo
	// La funcion getimagesize nos retorna un arreglo de propiedades de la imagen y si no es una imagen retorna false y un error notice.
	// Podemos utilizar el @ antes de la funcion para omitir el notice si no es una imagen.
	$check = @getimagesize($_FILES['foto']['tmp_name']);
	if ($check !== false){// en caso de que si sea una imagen
		$carpeta_destino = 'fotos/';// donde se guardara la foto
		$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];// es la ruta del directorio y el archivo
		move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);// el segundo parametro es donde lo queremos mover

		$statement = $conexion->prepare('INSERT INTO fotos (titulo, imagen, texto) VALUES (:titulo, :imagen, :texto)');
		$statement->execute(array(':titulo' => $_POST['titulo'], ':imagen' => $_FILES['foto']['name'], ':texto' => $_POST['texto']));
        //el arreglo remplaza los placeholder de la consulta preparada
    $success= $_FILES['foto']['name'] . ' subido correctamente';        
	} else {
		$error = "El archivo no es una imagen o el archivo es muy pesado";
	}
}

require 'views/subir.view.php';

?>