<?php

require('functions.php');


$carreras = getCarreras();
$users = getUsers();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matricula</title>
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
    <a href="/matricula.php">Ver todas</a>
    <form method="post" action="matricular.php">
    
    <div class="form-group">
        <label for="usuario">Usuarios</label>
        <select id="usuario" class="form-control" name="user">
          <?php

          foreach($users as $user) {
            echo "<option value=\"".$user['id']."\">".$user['name']."</option>";
          }
          ?>
        </select>
      </div>
      

      <div class="form-group">
        <label for="carrera">Carrera</label>
        <select id="carrera" class="form-control" name="career">
          <?php

          foreach($carreras as $carrera) {
            echo "<option value=\"".$carrera['id']."\">".$carrera['name']."</option>";
          }
          ?>
        </select>
      </div>

      <button type="submit" class="btn btn-primary"> Matricular </button>

    </form>
  </div>

</body>

</html>