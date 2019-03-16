    <?php
        $errores = '';
        if(isset($_POST['submit'])){
            $nombre = $_POST['nombre'];
            if(!empty($nombre)){
                $nombre = trim($nombre);//quita los espacios en blanco al inicio y al final 
                $nombre = htmlspecialchars($nombre);// traduce los caracteres especiales a su simbologia que el navegador pueda mostrar sin interpretar
                $nombre = stripslashes($nombre);//
                $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
                echo $nombre . '<br>';    
            }
            else
                $errores .='por favor agrega un nombre';
    $correo = $_POST['correo'];
            if(!empty($correo)){
                $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);//quita solo los caracteres
                if(!filter_var($correo, FILTER_VALIDATE_EMAIL))//valida que el correo sea correcto
                    $errores .= 'por favor corrige el correo';
                else
                echo $correo . '<br>';    
            }
            else
                $errores .='por favor agrega un correo';

        }                                                

?>
<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
        <title>Formulario</title>
    </head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="lo que usa php" method="post"><!--  en action para enviar los datos a la misma pagina
     se puede dejar vacio pero no es recomendable anteriormente los navegadores no lo aceptaban, entonces se pone la misma url
    si no se especifica el metodo, por default es get-->
        <input type="text" placeholder="Nombre" name="nombre">
        <input type="text" placeholder="correo" name="correo">
        
        <?php if(!empty($errores)): // este if llegara hasta la segunda etiqueta php que esta a continuacion, ejecutara lo que estara adentro ?>
        <div class='error'><?php echo $errores; ?></div>
        <?php endif; ?>
        <br>
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">
        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" value="mujer" id="mujer">
        <select name="year" id="year">
        <option value="2000">2000</option>
        <option value="2005">2005</option>
        <option value="2010">2010</option>    
        </select><br>
        <label for="terminos">Aceptas los terminos?</label>    
        <input type="checkbox" name="terminos" value="true"><br>
        <input type="submit" value="Enviar" name="submit">
        
<!--primer video
el name es super importante
el valor en el nombre no se pone, por que es un valor dinamico que el usuario da, en los demas si se pone por que es un valor estatico
-->
        
<!--video de validaciones
es recomendable tambien validar por javascript no solo por php
-->

                                                       
        
    </form>
    </body>
</html>