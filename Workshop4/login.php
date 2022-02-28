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
      header('Location: http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop4/dashboard.php');
    }
    else{
      header('Location: http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop4/index.php?status=login');
    }
  }

?>
