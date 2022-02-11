<?php


include('functions.php');


if($_POST['firstName'].$_POST['lastName'].$_POST['email'].$_POST['province'].$_POST['password']) {

  //iteraciones
  //print_r($_REQUEST);

  //get each field and insert to the database

  saveUser($_REQUEST);
}


  //Conecction database
  $conexion = mysqli_connect('127.0.0.1','root','','workshop2');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
    <div class="jumbotron">
      <h1 class="display-4">Users</h1>
      <p class="lead">This is the users registered</p>
      <hr class="my-4">
    </div>
    <div>
      <table class="table">
        <tr>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email Adress</th>
          <th scope="col">Province</th>
        </tr>
        <?php
          $sql = "SELECT * FROM customers";
          $data = mysqli_query($conexion, $sql);

          while($users=mysqli_fetch_array($data)){

          
        ?>
        <tr>
          <td><?php echo $users['firstName']?></td>
          <td><?php echo $users['lastName']?></td>
          <td><?php echo $users['emailAdress']?></td>
          
          <td>
          <?php 

          $provinces =array(55 => 'Alajuela', 56 => 'San Jose', 57 => 'Cartago', 80 => 'Heredia', 90 => 'Limon', 100 => 'Puntarenas', 200 => 'Guanacaste');

          $resultadoProvincia = $provinces[$users['province']];
          echo $resultadoProvincia
          ?>
          </td>
        </tr>
          <?php 
            }
          ?>
      </table>
    </div>  
          
    <button type="submit" class="btn btn-primary" onclick="location='http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop2/'"> Regresar </button>

  </div>
  
</body>
</html>
