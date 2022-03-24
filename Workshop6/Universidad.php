<?php
class Universidad
{
    /**
     * Establece conexion
     */
    public function conexion(){
        return mysqli_connect('127.0.0.1','root','','workshop6');
    }

    /**
     * Obtiene las carreras de la universidad
     */
    public function getCarreras(){
        $connection = Universidad::conexion();
        $sqlCarreras = "SELECT * FROM `carreras`;";
        $result = mysqli_query($connection, $sqlCarreras);

        return $result->fetch_all();
    }
}