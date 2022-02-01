<?php

    //Obtiene fecha
    function obtenerFecha(){
        //variable almacena fecha
        $fechaActual = date('d-m-Y');

        return $fechaActual;
    }
    
    //Obtener hora
    function obtenerHora(){
        //variable almacena hora
        $horaActual = date("h:i:s a");

        return $horaActual;
    }


    $fecha = obtenerFecha();
    $hora = obtenerHora();
    //imprimir fechaActual y hora actual
    echo $fecha ."<br>". $hora;

?>