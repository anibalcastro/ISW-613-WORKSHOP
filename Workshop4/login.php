<?php
  require('functions.php');

  if ($_POST) {

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $usuario = authenticate($email, $password);
    //Nombre
    $nombre = $usuario[0];
    //Rol
    $rol = $usuario[1];
    //Resultado
    $resultado = $usuario[2];

    //si existe usuario, inicie sesión
    if ($resultado){
      //inicia sesión
      session_start();
      
      $_SESSION['user'] = $nombre;

      if ($rol == 1){
        $urlAdmin = "http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop4/dashboard.php?status=success&message=".$nombre;
        header("Location: $urlAdmin");
      }
      else{
        $urlEstudiante = "http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop4/estudiante/bienvenida.php?status=success&message=".$nombre;
        header("Location: $urlEstudiante");
      }

    }
    else{
      header('Location: http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop4/index.php?status=login');
    }
  }

?>
