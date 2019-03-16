<?php
//el encargado de recibir los valores de index.php
// la variable _POST se crean cuando el usuario da el submit

//if(!$_POST)header('Location: index.php');//forma optimizada
if($_POST){
echo '<pre>';
print_r($_POST);
echo '</pre>';

$nombre = $_POST['nombre'];
echo $nombre;
}else{
    header('Location: index.php');//se puede poner cualquier url
}
  //post envia lops datos por detras del formulario, no agrega nada en pantalla, por segurida, get los envia por url
  // con post podemos enviar archivos, con get nunca

if($_SERVER['REQUEST_METHOD']=='GET')
    echo 'se enviaron por get'
if($_SERVER['REQUEST_METHOD']=='POST')
    echo 'se enviaron por get'
//forma correcta de comprobar si se enviaron los datos por el formulario
//no hay forma de saber de que formulario se envio en caso de haber mas
//recomendable cuando solo hay un formulario
    
    //otra forma de comprobar si se enviaron los datos
if(isset($_POST['submit'])){
    echo 'se enviaron los datos por algun metodo correctamente';
    print_r($_POST['submit']);
}
// puede comprobar en caso de haber mas formularios
?>
