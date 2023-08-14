<?php
$con = mysqli_connect("localhost","root","","delivery_system");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
session_start();
require 'dbcon.php';

if(isset($_POST['delete_insumo']))
{
    $codigo_id = mysqli_real_escape_string($con, $_POST['delete_insumo']);

    $query = "DELETE FROM inventario WHERE codigo='$codigo_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Insumo eliminado correctamente";
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
    $codigo_id = mysqli_real_escape_string($con, $_POST['codigo']);

    $categoria = mysqli_real_escape_string($con, $_POST['categoria']);
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $proveedor = mysqli_real_escape_string($con, $_POST['proveedor']);
    $cantidad = mysqli_real_escape_string($con, $_POST['cantidad']);
    $unidad = mysqli_real_escape_string($con, $_POST['unidad']);
    $actualización = mysqli_real_escape_string($con, $_POST['actualización']);

    $query = "UPDATE Inventario SET categoria='$categoria', nombre='$nombre', proveedor='$proveedor', cantidad='$cantidad', unidad='$unidad', actualización='$actualización', WHERE id='$codigo_id' ";
    $query_run = mysqli_query($con, $query);

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
    $categoria = mysqli_real_escape_string($con, $_POST['categoria']);
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $proveedor = mysqli_real_escape_string($con, $_POST['proveedor']);
    $cantidad = mysqli_real_escape_string($con, $_POST['cantidad']);
    $unidad = mysqli_real_escape_string($con, $_POST['unidad']);
    $actualización = mysqli_real_escape_string($con, $_POST['actualización']);

    $query = "INSERT INTO inventario (categoria,nombre,proveedor,cantidad,unidad,actualización) VALUES ('$categoria','$nombre','$proveedor','$cantidad','$unidad','$actualización')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Insumo agregado correctamente";
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