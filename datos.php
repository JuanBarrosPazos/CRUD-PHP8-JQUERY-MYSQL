<?php

    header('Content-Type: application/json');

    require("conexion.php");
    $conexion = retornarConexion();

    switch ($_GET['accion']) {
        case 'listar':
            $datos = mysqli_query($conexion, "SELECT * FROM articulos");
            $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
            echo json_encode($resultado);
            break;
        
        case 'agregar':
            $respuesta = mysqli_query($conexion, "INSERT INTO articulos (code, nombre, precio) VALUES ('$_POST[code]', '$_POST[nombre]', '$_POST[precio]')");
            echo json_encode($respuesta);
            break;
        
        case 'borrar':
            $respuesta = mysqli_query($conexion, "DELETE FROM articulos WHERE id=$_GET[id]");
            echo json_encode($respuesta);
            break;

        case 'consultar':
            $datos = mysqli_query($conexion, "SELECT * FROM articulos WHERE id=$_GET[id]");
            $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
            echo json_encode($resultado);
            break;

        case 'modificar':
            $respuesta = mysqli_query($conexion, "UPDATE articulos SET code='$_POST[code]', nombre='$_POST[nombre]', precio='$_POST[precio]' WHERE id=$_GET[id]");
            echo json_encode($respuesta);
            break;
    }

    // LISTAR
    //"SELECT * FROM articulos";

    // AGREGAR
    //"INSERT INTO articulos (code, nombre, precio) VALUES ('$_POST[code]', '$_POST[nombre]', '$_POST[precio]')";

    // BORRAR
    //"DELETE FROM articulos WHERE id=$_GET[id]";

    //CONSULTAR
    //"SELECT * FROM articulos WHERE id=$_GET[id]";

    //MODIFICAR
    //"UPDATE articulos SET code='$_POST[code]', nombre='$_POST[nombre]', precio='$_POST[precio]' WHERE id=$_GET[id]";

?>