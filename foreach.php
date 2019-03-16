<?php

//para arreglos indexados
$meses = array('enero','febreo','marzo','abril');
foreach($meses as $mes){
    echo $mes;
}
echo "<br>";
//para arreglos asociativos
$martin = array('telefono'=>4490000 ,'edad'=>20,"apellido"=>"campos","pais"=>"mexico");
foreach($martin as $dato => $valor){
    echo $dato . "  " . $valor. "<br>";
}
?>