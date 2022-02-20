<?php
    //establecemos conexión
    $connection = mysqli_connect('127.0.0.1','root','','workshop3');


    if (isset($_POST["idCategories"])){

        //asignamos lo que viene en idCategorias a $id_Eliminar
        $id_eliminar = $_POST["idCategories"];
     
        //realizamos consulta
        $sqlEliminar = "DELETE FROM categories WHERE id= $id_eliminar";
        
        //ejecutamos la consulta a la base de datos
        mysqli_query($connection, $sqlEliminar);
        
        //cerramos conexión
        mysqli_close($connection);
        
        //creamos alerta
        echo '<script language="javascript">alert("Category was delete sucessfully");</script>';

        //devolvemos ubicación
        header("location: http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop3/list.php?status=success&message=Category was delete ");
      }

?>