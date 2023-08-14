<?php
include_once "conexion.php";
$conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_database);

if(!$conexion){
    die('Connection Failed'. mysqli_connect_error());
}

session_start();
require 'conexion.php';

if(isset($_POST['delete_insumo']))
{
    $codigo_id = mysqli_real_escape_string($conexion, $_POST['delete_insumo']);

    $query = "DELETE FROM inventario WHERE codigo='$codigo_id' ";
    $query_run = mysqli_query($conexion, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: http://localhost/dashboard_admin/vistas/crud_inventario/index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: http://localhost/dashboard_admin/vistas/crud_inventario/index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $codigo_id = mysqli_real_escape_string($conexion, $_POST['codigo']);

    $categoria = mysqli_real_escape_string($conexion, $_POST['categoria']);
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $proveedor = mysqli_real_escape_string($conexion, $_POST['proveedor']);
    $cantidad = mysqli_real_escape_string($conexion, $_POST['cantidad']);
    $unidad = mysqli_real_escape_string($conexion, $_POST['unidad']);
    $actualización = mysqli_real_escape_string($conexion, $_POST['actualización']);

    $query = "UPDATE Inventario SET categoria='$categoria', nombre='$nombre', proveedor='$proveedor', cantidad='$cantidad', unidad='$unidad', actualización='$actualización', WHERE id='$codigo_id' ";
    $query_run = mysqli_query($conexion, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $categoria = mysqli_real_escape_string($conexion, $_POST['categoria']);
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $proveedor = mysqli_real_escape_string($conexion, $_POST['proveedor']);
    $cantidad = mysqli_real_escape_string($conexion, $_POST['cantidad']);
    $unidad = mysqli_real_escape_string($conexion, $_POST['unidad']);
    $actualización = mysqli_real_escape_string($conexion, $_POST['actualización']);

    $query = "INSERT INTO inventario (categoria,nombre,proveedor,cantidad,unidad,actualización) VALUES ('$categoria','$nombre','$proveedor','$cantidad','$unidad','$actualización')";

    $query_run = mysqli_query($conexion, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>