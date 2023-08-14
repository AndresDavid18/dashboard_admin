<?php
    conexionphp();
    function conexionphp(){
    $server = 'localhost';
    $user = 'root';
    $pass ='';
    $db = 'Delivery_System';
    $conectar = mysqli_connect($server, $user, $pass, $db) or die ("Error en la conexion");
    return $conectar;

    }
?>