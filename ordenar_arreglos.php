<?php

//ordenar arreglos, si son strings son por alfabeto con ayuda de sort
$meses = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
//sort($meses);
rsort($meses);//inversa de sort

//esto funciona tambien con numeros
//los numeros en algunos lenguajes los ordena de manera extraña
$numeros = [1,65,100,12,12]
//por ejemplo ordenaria 1, 100,12,12 65, pero php ordena bien 
?>

<!DOCTYPE html>
<head>
</head>
<body>
<h1>Meses</h1>
<ol>
<?php
foreach($meses as $mes)
    echo '<li>'.$mes.'</li>'
?>
</ol>
</body>
</html>