<?php

/**
 *
 */
function getCarreras(){
  $connection = mysqli_connect('127.0.0.1','root','','workshop4');

  $query = 'SELECT * from careers';
  $result = mysqli_query($connection, $query);
  $carreras = $result->fetch_all(MYSQLI_ASSOC);
  return $carreras;
}

/**
 * Obtiene una matricula desde la base de datos
 */
function getMatriculaById($id){
  $connection = mysqli_connect('127.0.0.1','root','','workshop4');

  $query = "SELECT * from matricula WHERE id = $id";
  $result = mysqli_query($connection, $query);
  return $result->fetch_assoc();
}

/**
 *
 */
function getMatriculas(){
  $connection = mysqli_connect('127.0.0.1','root','','workshop4');

  $query = "SELECT matricula.id ,users.name, users.email, careers.name as career FROM matricula \n"
  . "INNER JOIN careers ON matricula.careerId = careers.id \n"
  . "INNER JOIN users ON matricula.userId = users.id;";
  $result = mysqli_query($connection, $query);
  $matriculas = $result->fetch_all(MYSQLI_ASSOC);
  return $matriculas;
}

/**
 * Valida si el usuario ingresado
 * existe en la base de datos
 * por medio del $email y $password
 */
function authenticate($email, $password){
 
  $connection = mysqli_connect('127.0.0.1','root','','workshop4');

  //consulta para saber existencia
  $sqlUsuarios = "SELECT * FROM users WHERE  `email` = '$email' AND `contrasenna` = '$password'";

  //resultado si el existe o no
  $result = mysqli_query($connection, $sqlUsuarios);

  //si el sql viene vacio, cierra conexión y retorna falso.
  if ($result == ""){
    mysqli_close($connection);
    return false;
  }
  // si viene lleno, cierra conexión y retorna el resultado.
  else{
    mysqli_close($connection);
    return $result->fetch_array();
  }
}

/**
 *
 */
function getUsers(){
  $connection = mysqli_connect('127.0.0.1','root','','workshop4');

  $query = 'SELECT * from users';
  $result = mysqli_query($connection, $query);
  $users = $result->fetch_all(MYSQLI_ASSOC);
  return $users;
}