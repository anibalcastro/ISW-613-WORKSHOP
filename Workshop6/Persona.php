<?php

class Persona
{
    public $id = 1;
    public $nombre='Name';
    public $apellido='Apellido';
    public $cedula=123456;
    public $correoElectronico='gmail';

    /**
     * Constructor
     */
    public function __construct($nombrePersona = 'Julanito', $apellidoPersona='Castro', $cedulaPersona=208110305, $correoPersona='anibaljafethcastro@gmail.com'){
        $this->nombre = $nombrePersona;
        $this->apellido = $apellidoPersona;
        $this->cedula = $cedulaPersona;
        $this->correoElectronico = $correoPersona;
    }

    /**
     * Setea el id
     */
    public function setId($idPersona){
        $this->$id = $ididPersona;
    }

    /**
     * Retorna el id
     */
    public function getId(){
        return $this-$id;
    }

    public function saveData()
    {
       return "('{$this->nombre}', '{$this->apellido}', '{$this->cedula}', '{$this->correoElectronico}'";
    }
}
    