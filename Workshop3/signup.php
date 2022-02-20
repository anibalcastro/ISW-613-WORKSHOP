<?php
  if($_POST) {
    $nombre = $_REQUEST['nameCategory'];
    $descripcion = $_REQUEST['descriptionCategory'];
   

    $sql = "INSERT INTO categories(`nombre`, `descripcion`) VALUES ('$nombre','$descripcion')";
    $connection = mysqli_connect('127.0.0.1','root','','workshop3');
    mysqli_query($connection, $sql);
    header('Location: http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop3/index.php?status=success&message=Category was created');
  } else {
    header('Location: http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop3/index.php?status=error&message=There was an error');
  }