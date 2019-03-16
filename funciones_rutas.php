<?php 
// no importa si el archivo y directorios existen o no
// echo pathinfo('documento.txt', PATHINFO_FILENAME); con el segundo parametro nos permite obtener el nombre con la extension

	// * PATHINFO_DIRNAME // Devuelve el directorio padre del archivo
	// * PATHINFO_BASENAME // Devuelve el nombre del archivo con su extension
	// * PATHINFO_EXTENSION // Devuelve la extension del archivo
	// * PATHINFO_FILENAME // Devuelve el nombre del archivo


//poder buscar archivos dependiendo de su nombre
// $resultados = glob('*.{php,html,txt}', GLOB_BRACE); 
// print_r($resultados);

//nos permite conocer el nombre base y extension de un archivo , y elimina toda la ruta del archivo
// echo basename('carpeta1/carpeta2/archivo.php', '.php');// el segundo parametro se toma en cuanta para eliminar mas

//devuelve el directorio padre de la ruta
echo dirname('carpeta1/carpeta2/archivo.php');

?>