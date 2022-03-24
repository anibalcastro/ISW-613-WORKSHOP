<?php
include('Estudiante.php');
$datos = new Estudiante();
$matriculas = $datos->getMatriculas();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Lista de Matriculas</title>
</head>
<style>
  html{
    margin-left:5px;
    margin-right: 5px;
  }

  h1{
    display:flex;
    align-items:center;
    justify-content:center;
  }

  thead{
    margin-top:10px;
    background-color: black;
    color:white;
  }
</style>
<body>
    <h1>Lista de matriculados</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDOS</th>
            <th scope="col">CEDULA</th>
            <th scope="col">CORREO</th>
            <th scope="col">CARRERA</th>
            <th scope="col">FECHA MATRICULA</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          foreach($matriculas as $matricula ){
          ?>
          <tr>
            <th scope="row"><?php echo $matricula[0]?></th>
            <td><?php echo $matricula[1]?></td>
            <td><?php echo $matricula[2]?></td>
            <td><?php echo $matricula[3]?></td>
            <td><?php echo $matricula[4]?></td>
            <td><?php echo $matricula[5]?></td>
            <td><?php echo $matricula[6]?></td>
          </tr>
          <?php 
          }          
          ?>
        </tbody>
    </table>  
    
    <a href="http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop6/index.php" type="button" class="btn btn-primary">Regresar</a>

</body>
</html>