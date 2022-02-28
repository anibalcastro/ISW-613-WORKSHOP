<?php
session_start();
$user = $_SESSION['user'];

if (!$user) {
  header('Location: index.php');
}

require('functions.php');

$matriculas = getMatriculas();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Matriculas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
    <div class="jumbotron">
      <h1 class="display-4">Matricula</h1>
      <p class="lead">Proceso de matricula</p>
      <hr class="my-4">
    </div>

    <a href="http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop4/dashboard.php">Nuevo</a>
    <table class="table table-light">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Carrera</th>
        
      </tr>
      <tbody>
        <?php
          // loop matriculas
          foreach($matriculas as $matricula) {
            echo "<tr> 
            <td>".$matricula['id']."</td>
            <td>".$matricula['name']."</td>
            <td>".$matricula['email']."</td>
            <td>".$matricula['career']."</td>
            </tr>";
          }
        ?>
      </tbody>
    </table>
  </div>

</body>

</html>