<?php

include('Estudiante.php');
date_default_timezone_set('America/Costa_Rica');
$fechaActual = date('d-m-Y H:i:s');

$date = date_create("$fechaActual");
$dateTime = date_format($date, "Y/m/d H:i:s");

//$nuevoEstudiante = new Estudiante("Anibal","Castro",208110305,"anibaljafethcastro@gmail.com",2,$dateTime);
$nuevoEstudiante = new Estudiante();
//$resultado = $nuevoEstudiante->createMatricula();
$datos = $nuevoEstudiante->getMatriculas();
var_dump($datos);
