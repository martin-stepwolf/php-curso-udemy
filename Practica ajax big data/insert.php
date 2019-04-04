<?php
    if($_POST['name']){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password= $_POST['password'];
      $gender = $_POST['gender'];
      /* forma actual que se usa
      $conexion2 = new PDO('mysql:host=localhost; dbname=ajax;','root','');
      $statement2 = $conexion2->prepare("INSERT INTO user (name, email, password, gender) VALUES ('$name', '$email', '$password', '$gender')");
      $statement2->execute();*/
      
      //Create connection, forma antigua
  $connection = mysqli_connect('localhost', 'root', '', 'ajax');
  $q = "INSERT INTO user (name, email, password, gender) VALUES ('$name', '$email', '$password', '$gender')";
  $query = mysqli_query($connection, $q);
  if($query){
      echo json_encode("Data Inserted Successfully");
      }
  else {
      echo json_encode('problem');
      }

?>
