<?php

include('Estudiante.php');

if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['cedula']) && !empty($_POST['correo'])){
    date_default_timezone_set('America/Costa_Rica');
    $fechaActual = date('d-m-Y H:i:s');

    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $cedula = $_REQUEST['cedula'];
    $correo = $_REQUEST['correo'];
    $idCarrera = $_REQUEST['carrera'];

    $date = date_create("$fechaActual");
    $dateTime = date_format($date, "Y/m/d H:i:s");

    $nuevoEstudiante = new Estudiante($nombre,$apellido,$cedula,$correo,$idCarrera,$dateTime);
    $nuevoEstudiante->createMatricula();
    header('Location: list.php');

}