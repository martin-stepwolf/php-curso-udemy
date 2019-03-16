<?php

//rrecorer un arreglo y llenar bien una pagina web
$meses = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];

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