<?php

    function retornarConexion(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $base = "appweb_ds";
        $conexion = mysqli_connect($server,$user,$pass,$base) or die ( "error de conexión!");
        mysqli_set_charset($conexion,'utf8');
        return $conexion;
    }

?>