<?php

include_once "conexion.php";
$conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_database);

if(!$conexion){
    die('Connection Failed'. mysqli_connect_error());
}

?>