<?php
    if($_POST['name']){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password= $_POST['password'];
      $gender = $_POST['gender'];

      $conexion2 = new PDO('mysql:host=localhost; dbname=ajax;','root','');
      $statement2 = $conexion2->prepare("INSERT INTO user (name, email, password, gender) VALUES ('$name', '$email', '$password', '$gender')");
      $statement2->execute();
      }

?>
