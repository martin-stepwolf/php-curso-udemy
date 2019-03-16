<?php 
// la paginacion nos puede ayudar para dar orden a los resultados de una base de datos, no muestre todos sus elementos solo unos cuantos


// Nos conectamos a la base de datos
try {
	$conexion = new PDO('mysql:host=localhost;dbname=curso paginacion', 'root', '');
} catch (PDOException $e) {
	echo 'ERROR: '. $e->getMessage();//en caso de que falle la conexion
	die();
}

// Establecemos el numero de pagina en la que el usuario se encuentra.
# Esto lo hacemos por el metodo GET, si no hay ningun valor entonces le asignamos la pagina 1.
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

// Establecemos cuantos post por pagina queremos cargar.
$postPorPagina = 1;

// Revisamos desde que articulo vamos a cargar, dependiendo de la pagina en la que se encuentre el usuario.
# Comprobamos si la pagina en la que esta es mayor a 1, sino entonces cargamos desde el articulo 0.
# Si la pagina es mayor a 1 entonces hacemos un calculo para saber desde que post cargaremos.
$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0 ;

// Preparamos la consulta SQL
$articulos = $conexion->prepare("
	SELECT SQL_CALC_FOUND_ROWS * FROM articulos
	LIMIT $inicio, $postPorPagina
");//poniendo de forma adecuada comillas dobles afuera
//mas adelante ocuparemos saber cuantos articulos hay en la base de datos por ello es necesario poner el SQL_CALC_FOUND_ROWS

// Ejecutamos la consulta
$articulos->execute();
$articulos = $articulos->fetchAll();

// Comprobamos que haya articulos, sino entonces redirigimos.
if (!$articulos) {
	header('Location: index.php');
}

// Calculamos el total de articulos, para despues conocer el numero de paginas de la paginacion.
$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');// el found rows lo conocemos gracias a sql calc found rows
$totalArticulos = $totalArticulos->fetch()['total'];

// Calculamos el numero de paginas que tendra la paginacion.
# Para esto dividimos el total de articulos entre los post por pagina
$numeroPaginas = ceil($totalArticulos / $postPorPagina);// con ceil se redondea hacia arriba

require 'index.view.php';
// hasta ahora solo se ha hecho la conexion a la base de datos y determinado las variables necesarias para llenar la pagina
// el rellenado de la pagina se realiza en index.view
?>