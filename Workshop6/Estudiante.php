<?php

require_once('Persona.php');

class Estudiante extends Persona{
    public  $idCarrera;
    public  $fechaMatricula;


    function __construct($nombre, $apellidos, $cedula, $correoElectronico,  $idCar, $fechaMat){
        $this-> idCarrera = $idCar;
        $this-> fechaMatricula = $fechaMat;
        parent::__construct($nombre, $apellidos, $cedula, $correoElectronico);
    }

    public function saveData()
    {
      return Persona::saveData()."{$this->idCarrera},'{$this->fechaMatricula}');";      
    }

    public function createEstudent(){
        try {
            $connection = mysqli_connect('127.0.0.1','root','','workshop4');      
            $sqlInsert = "INSERT INTO `matricula`(`id`, `nombre`, `apellido`, `correoElectronico`, `idCarrera`) VALUES ".Persona::saveData()."{$this->idCarrera},'{$this->fechaMatricula}');";
            mysqli_query($connection, $sqlInsert);
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }

 
}