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

    /**
     * Contiene toda la informacion
     */
    public function saveData()
    {
      return Persona::saveData().",{$this->idCarrera},'{$this->fechaMatricula}');";      
    }

    /**
     * Establece conexion
     */
    public function conexion()
    {
        return mysqli_connect('127.0.0.1','root','','workshop6');
    }

    /**
     * Crea matriculas 
     */
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

    /**
     * Obtiene matriculas
     */
    public function getMatriculas(){
        $connection = Estudiante::conexion();
        $sqlGet = "SELECT matricula.id, nombre, apellido, cedula, correoElectronico, carreras.name as carrera, fecha FROM `matricula` INNER JOIN carreras ON matricula.idCarrera = carreras.id;";
        $result = mysqli_query($connection, $sqlGet);
        return $result->fetch_all();
    }

    /*
    public function getCarreras()
    {
        $connection = Estudiante::conexion();
        $sqlCarreras = "SELECT * FROM `carreras`;";
        $result = mysqli_query($connection, $sqlCarreras);

        return $result->fetch_all();
    }
    */
 
}