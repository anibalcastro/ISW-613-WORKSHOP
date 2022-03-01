<?php

session_start();
$user = $_SESSION['user'];

if (!$user) {
  header('Location: index.php');
}

$nombreUsuario = "";
if(!empty($_REQUEST['status'])) {
  $nombreUsuario = $_REQUEST['message'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="jumbotron">
      <h1 class="display-4">Formulario estudiante</h1>
      <?php echo "<p class='lead'>Bienvenido $nombreUsuario</p>" ?>

      <hr class="my-4">
      <form action="logout.php" method="post">
        <button type="submit" class="btn btn-danger">Log out</button>
      </form>
    </div>
</body>
</html>