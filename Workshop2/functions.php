<?php

/**
 * Saves an specific user into the database
 */
function saveUser($user){

    $servername = "127.0.0.1";
    $database = "workshop2";
    $username = "root";
    $password = "";

    // Create connection
    $connection = mysqli_connect($servername, $username, $password, $database);


  $firstName = $user['firstName'];
  $lastName = $user['lastName'];
  $emailAdress = $user['email'];
  $province = $user['province'];
  $password = $user['password'];

  
  $sql = "INSERT INTO customers VALUES ('$firstName', '$lastName', '$emailAdress', '$province', '$password')";

  mysqli_query($connection, $sql);
  echo '<script language="javascript">alert("Cliente Agregado");</script>';

}
/*
 *Get provinces of Costa Rica.
 */
function getProvinces() {
    //select * from provinces;
    return [55 => 'Alajuela', 56 => 'San Jose', 57 => 'Cartago', 80 => 'Heredia', 90 => 'Limon', 100 => 'Puntarenas', 200 => 'Guanacaste'];
  }

