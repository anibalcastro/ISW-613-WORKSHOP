<?php
    require ('functions.php');

    if ($_POST) {
        $nombre = $_REQUEST['nameU'];
        $identificacion = $_REQUEST['idU'];    
        $email = $_REQUEST['emailU'];
        $password = $_REQUEST['passwordU'];

        createUser($nombre, $identificacion, $email, $password);
    }
      
?>