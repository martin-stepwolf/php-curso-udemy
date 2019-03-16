<?php
//el encargado de recibir los valores de index.php por la url
// por la url se puede inyectar javascript, html codigo en general
//if(!$_GET)header('Location: index.php');//forma optimizada
if($_GET){
echo '<pre>';
print_r($_GET);
echo '</pre>';

    if($_GET['nombre'])
$nombre = $_GET['nombre'];
    else
        $nombre = 'vacio';
echo $nombre;
}else{
    header('Location: index.php');//se puede poner cualquier url
}
//es recomendable solo usarlo cuando se quiere solo mostrar valores en pantalla
// nunca se utiliza con informacion sensible
echo htmlspecialchars($nombre);//una forma de evitar que nos inyecten codigo
if($_SERVER['REQUEST_METHOD']=='GET')
    echo 'se enviaron por get'
if($_SERVER['REQUEST_METHOD']=='POST')
    echo 'se enviaron por get'

?>
