<?php

/**
 *
 */
function getCarreras(){
  $connection = mysqli_connect('localhost:3306', 'root', 'root1234', 'php_web2');

  $query = 'SELECT * from careers';
  $result = mysqli_query($connection, $query);
  $carreras = $result->fetch_all(MYSQLI_ASSOC);
  return $carreras;
}

/**
 * Obtiene una matricula desde la base de datos
 */
function getMatriculaById($id){
  $connection = mysqli_connect('localhost:3306', 'root', 'root1234', 'php_web2');

  $query = "SELECT * from matricula WHERE id = $id";
  $result = mysqli_query($connection, $query);
  return $result->fetch_assoc();
}


/**
 *
 */
function getMatriculas(){
  $connection = mysqli_connect('localhost:3306', 'root', 'root1234', 'php_web2');

  $query = 'SELECT matricula.*, careers.name as careerName
            FROM matricula JOIN careers ON matricula.careerId = careers.id';
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
  //falta colocar datos
  $connection = mysqli_connect('localhost:3306', 'root', 'root1234', 'php_web2');

  //consulta para saber existencia
  $sqlUsuarios = "SELECT * FROM users WHERE  `username` = '$username' AND `password` = '$password'";

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