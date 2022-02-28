<?php
  require('functions.php');

  if ($_POST) {

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $usuario = authenticate($email, $password);
    print_r($usuario);
    die;

    //si existe usuario, inicie sesión
    if ($usuario){
      //session_start();
    
  
      die;
      $_SESSION['user'] = $usuario;

      if ($iterar["rol"] == 1){
        $urlAdmin = "http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop4/dashboard.php?status=success&message=".$name;
        header("Location: $urlAdmin");
      }
      else{
        $urlEstudiante = "http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop4/estudiante/bienvenida.php?status=success&message=".$name;
        header("Location: $urlEstudiante");
      }

    }
    else{
      header('Location: http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop4/index.php?status=login');
    }
  }

?>
