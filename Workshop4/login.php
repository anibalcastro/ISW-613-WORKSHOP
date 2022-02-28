<?php
  require('functions.php');

  if ($_POST) {

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $usuario = authenticate($email, $password);

    //si existe usuario, inicie sesión
    if ($usuario){
      session_start();
      $_SESSION['user'] = $usuario;
      $url = "http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop4/dashboard.php?status=success&message=".$usuario;
      header("Location: $url");
    }
    else{
      header('Location: http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop4/index.php?status=login');
    }
  }

?>
