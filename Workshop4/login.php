<?php
  require('function.php');

  if ($_POST) {

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $usuario = authenticate($email, $password);

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
