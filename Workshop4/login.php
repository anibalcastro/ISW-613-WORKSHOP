<?php
  require('function.php');

  if ($_POST) {

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $usuario = authenticate($email, $password);

    if ($usuario){
      session_start();
      $_SESSION['user'] = $usuario;
      header('Location: dashboard.com');
    }
    else{
      header('Location: index.php?status=login');
    }
  }

?>
