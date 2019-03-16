<?php 
//comprobar si la cookie existe
if (isset($_COOKIE['font-size'])) {
	$tamaño = $_COOKIE['font-size'];// podemos poner htmlspecialchars para protegernos de inyecciones de codigo
} else {
	$tamaño = '16px';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Texto</title>
	<style>
		p {
			font-size: <?php echo $tamaño; ?>;
		}
	</style>
</head>
<body>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>