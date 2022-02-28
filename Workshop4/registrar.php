<?php
    require('functions.php');

    if ($_POST) {
        $name = $_REQUEST('name');
        $id = $_REQUEST('id');
        $email = $_REQUEST('email');
        $password = $_REQUEST('password');

        createUser($name,$id,$email,$password);
    }
      
?>