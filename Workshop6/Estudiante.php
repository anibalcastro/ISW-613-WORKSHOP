<?php

require_once('Persona.php');

class Estudiante extends Persona{
    public  $idCarrera;
    public  $fechaMatricula;


    function __construct($nombre = "", $apellidos="", $cedula="", $correoElectronico="",  $idCar="", $fechaMat=""){
        $this-> idCarrera = $idCar;
        $this-> fechaMatricula = $fechaMat;
        parent::__construct($nombre, $apellidos, $cedula, $correoElectronico);
    }

    public function saveData()
    {
      return Persona::saveData().",{$this->idCarrera},'{$this->fechaMatricula}');";      
    }

    public function conexion(){
        return mysqli_connect('127.0.0.1','root','','workshop6');
    }

    public function createMatricula(){
        try {
            $connection = Estudiante::conexion();      
            $sqlInsert = "INSERT INTO `matricula`(`nombre`, `apellido`,`cedula`, `correoElectronico`, `idCarrera`, `fecha`) VALUES ".Estudiante::saveData();
            mysqli_query($connection, $sqlInsert);
            return $sqlInsert;
        } catch (Exception $th) {
            return $th->getMessage();
        }
        
    }

    public function getMatriculas(){
        $connection = Estudiante::conexion();
        $sqlGet = "SELECT matricula.id, nombre, apellido, cedula, correoElectronico, carreras.name as carrera FROM `matricula` INNER JOIN carreras ON matricula.idCarrera = carreras.id;";
        $result = mysqli_query($connection, $sqlGet);
        return $result->fetch_all();
    }

 
}