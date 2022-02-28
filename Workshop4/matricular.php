<?php

$userId = $_POST['user'];
$careerId = $_POST['career'];

  $sql = "INSERT INTO matricula (`userId`, `careerId`)
          VALUES($userId, $careerId)";


$conn = mysqli_connect('127.0.0.1','root','','workshop4');

mysqli_query($conn, $sql);

header('location: "http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop4/matricula.php"');