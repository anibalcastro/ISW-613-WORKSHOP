<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricular</title>
</head>
<body>
    <h1>Matricular</h1>

    <form action="saveMatricula.php" method="post">
        <input type="text" placeholder="Nombre" name="nombre">
        <input type="text" placeholder="Apellido" name="apellido">
        <input type="text" placeholder="Cedula" name="cedula">
        <input type="text" placeholder="Correo Electronico" name="correo">
        <select name="carrera" id="idCarrera">
            <option value="ISW"></option>
        </select>

        <input type="submit" value="Agregar">

    </form>
</body>
</html>