<?php
// las cookies son archivos que crea el servidor en las computadoras, para guardar pequeña informacion como preferencias 


setcookie('font-size', '30px', time() + 60 * 60 * 24 * 30, '/');// definiendo la cookie
//setcookie('font-size', '30px', time() + 60 * 60 * 24 * 30, '/');// para eliminar la cookie

//sobre las cookies
// podemos guardar hasta 4megabytes de texto
// existen plugin en los navegadores para acceder a ellas y poderlas modificar, dando oportunidad de inyectar codigo

//recomendarlas usarlas para guardar preferencias del sitio para el usuario, ya que estas se pueden borrar
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Cookie Seteada</h1>
</body>
</html>