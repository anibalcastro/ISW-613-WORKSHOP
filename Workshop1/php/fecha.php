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

    //zona horaria
    date_default_timezone_set("America/Costa_Rica");
    //variable almacena fecha
    $fechaActual = date("F j, Y");
    //variable almacena hora
    $horaActual = date("h:i:s a");
    
    //imprimir fechaActual y hora actual
    echo "<h2>La Fecha actual es: </h2>", $fechaActual, "<h2>La Hora actual es:</h2>", $horaActual;
    
    ?>
    </div>
</body>
</html>




