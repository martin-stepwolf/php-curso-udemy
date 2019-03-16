<?php

//
$meses = array('enero','febreo','marzo','abril');
for($i=0;$i < count($meses);$i++){
    echo $meses[$i];
}
$cont = 0;
while($cont < count($meses)){
    echo $meses[$cont];
    $cont++;
}
?>