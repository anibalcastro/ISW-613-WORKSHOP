<?php

Require('Estudiante.php');

$nuevoEstudiante = new Estudiante("Anibal","Castro",208110305,"anibaljafethcastro@gmail.com",2,'23/03/2022');

echo $nuevoEstudiante->createEstudent();