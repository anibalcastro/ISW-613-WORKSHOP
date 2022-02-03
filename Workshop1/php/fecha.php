<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="/Workshop1/css/index.css">
</head>

<body>
<div class="encabezado">
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
    echo "<h2>La fecha actual es: </h2>", $fecha, "<h2>La Hora actual es:</h2>", $hora;
    
    ?>
    </div>
</body>
</html>




