<?php
include('Universidad.php');

$datosCarrera = new Universidad();
$carreras = $datosCarrera->getCarreras();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Matricular</title>
</head>
<style>
    html{
        margin-left: 5px;
        margin-right: 5px:
    }

    form{
        display: flex;
        align-items: flex-start;
        justify-content: center;
        flex-direction: column;
    }

    input{
        margin-bottom: 15px;
        width: 50%;
    }

    select{
        margin-bottom: 15px;
        width: 50%;
        height:24px;
    }
</style>
<body>
    <h1>Matricular</h1>

    <form action="saveMatricula.php" method="post">
        <input type="text" placeholder="Nombre" name="nombre">
        <input type="text" placeholder="Apellido" name="apellido">
        <input type="text" placeholder="Cedula" name="cedula">
        <input type="text" placeholder="Correo Electronico" name="correo">
        <select name="carrera" id="idCarrera">
        <?php
          foreach($carreras as $carrera){
        ?>
        <option value=<?php echo "{$carrera[0]}" ?>> <?php echo "$carrera[2] - $carrera[1]"?></option>
        <?php
          }
        ?>
        </select>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
</body>
</html>