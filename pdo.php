<?php 
$id = $_GET['id'];
// la ventaja de aqui es que podemos utilizar otra opcion ademas de mysql
try {
	
	$conexion = new PDO('mysql:host=localhost;dbname=prueba', 'root', '');
	 echo "Conexion correcta";
    //ademas de localhost podemos poner 127.0.0.1   
	// Metodo Query (metodo desaconsejado)
	$resultados = $conexion->query("SELECT * FROM usuarios");// se puede poner cualquier consulta, y al abrir la pagina se ejecuta
    //esta forma es recomendable con consultas sencillas, no mas complejas ya que se puede inyectar codigo, no poner variables
    //usar este metodo solo sin variable sy puesto por el programador
    // adquiriendo por valor get y ponerlo en la consulta el usuario puede inyectar codigo
    // $id = $_GET('id');
    // es recomendable usar consultas preparadas para que el usuario no pueda inyectar codigo

	foreach($resultados as $fila){
        //print_r($fila);// para que se muestre el arreglo completo
		echo $fila['nombre'] . "<br />";
	}

    //las consultas preparadas nos permiten evitar que el usuario inyecte codigo en la aplicacion
    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE id = :id');// el :id es un placeholder un valor temporal que estaremos sustituyendo
    $statement->execute(
    array(':id' => $id)// poniendo la variable de esta forma, todo lo que venga en get no sera codigo inyectado
    );// se puede poner cualquier consulta
    // en caso de que se quiera poner un or, se pone el placeholder y en el arreglo separado por una coma poner el valor de la variable
    // or nombre = :id2,     $id, 'nombre' = $id2
    
    $resultados = $statement->fetch();// fetch solo traera un valor, fetch all traera todos(un arreglo con muchos arreglos)
    print_r($resultados);
    // en caso de que no se ponga el where, se puede recorrer el arreglo copiando y pegando o por for, el apuntador se recorre
    
} catch(PDOException $e){
	// Obtener errores
	echo "Error: " . $e->getMessage();
}

?>