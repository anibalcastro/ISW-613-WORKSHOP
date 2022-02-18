<?php
  if($_POST) {
    $nombre = $_REQUEST['nameCategory'];
    $descripcion = $_REQUEST['descriptionCategory'];
   

    $sql = "INSERT INTO categories(`nombre`, `descripcion`) VALUES ('$nombre','$descripcion')";
    $connection = mysqli_connect('127.0.0.1','root','','workshop3');
    mysqli_query($connection, $sql);
    header('Location: /index1.php?status=success&message=User was created');
  } else {
    header('Location: /index1.php?status=error&message=There was an error');
  }