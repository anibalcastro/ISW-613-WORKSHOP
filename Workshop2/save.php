<?php


include('functions.php');


if($_POST['firstName'].$_POST['lastName'].$_POST['email'].$_POST['province'].$_POST['password']) {

  //iteraciones
  print_r($_REQUEST);

  //get each field and insert to the database

  saveUser($_REQUEST);
}

