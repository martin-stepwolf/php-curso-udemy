<?php
$meses = array('enero','febreo','marzo','abril');

// continue pasa al siguiente ciclo, no pasa nada si se pone al ultimo del ciclo
foreach($meses as $mes){
    if($mes=='marzo')
        continue;
    echo $mes;
}
echo "<br";

//break para el ciclo, es recomendable ponerlo al final del ciclo
foreach($meses as $mes2){
    echo $mes2;
    if($mes2=='marzo')
        break;
}
?>