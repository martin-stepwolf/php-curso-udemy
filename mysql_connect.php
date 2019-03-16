<?php 
// esta es una forma tradicional, no recomendada pero al ser utilizada en internet hay que aprenderla.
$conexion = mysql_connect('127.0.0.1', 'root', '') or die('No se pudo conectar a la base de datos');// hacemos la conexion, y en caso de que falle la pagina muera

mysql_select_db('prueba_datos', $conexion);// selecionamos la base de datos

$resultados = mysql_query('SELECT * FROM usuarios'); // Podemos ejecutar cualquier consulta SQL, por ejemplo para ingresar usuarios en una base de datos.

$fila = mysql_fetch_object($resultados);// ingresamos al primer valor y lo devolvemos como objeto
// al finalizar la ejecucion pasara el puntero hacia el siguiente registro
echo $fila->nombre;
//para hacerlo ciclico se debe poner como en el siguiente while

//while($fila = mysql_fetch_object($resultados)){// esta forma no se aconseja ya que es vieja y tiene detalles, pueden inyectar codigo en el query
//    echo $fila->nombre;// para objetos
    
    while($fila = mysql_fetch_array($resultados)){//
	echo $fila['nombre']; // para arreglos
	echo "<br />";
}

?>