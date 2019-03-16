<?php
function saludo($nombre){
    return 'hola ' . $nombre;
}
//para incluir el siguente archivo
include 'vista.php';
// se puede utilizar require en vez de include, 
// include ejecuta la pagina de todos modos aunque no encuentre nada, require no
// include se utiliza cuando el archivo no es importante
// requiere cuando es importante, indispensable, por seguridad
// se recomienda utilizar siempre require

//con once solo se ejecuta una vez, aunque se ponga otra vez, funciona tambien para requiere, se asegura que no venga 
include_once 'vista.php';
require_once 'vista.php';

//es recomendable para separar html de css y php
?>