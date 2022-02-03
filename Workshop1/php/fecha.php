<?php

    //Obtiene fecha
    function obtenerFecha(){
        //variable almacena fecha
        date_default_timezone_set("America/Costa_Rica");
        $fechaActual = date("F j, Y");

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
    echo "<p>La fecha actual es: </p>", $fecha,"<br>", "<p>La Hora actual es:</p>", $hora;

?>