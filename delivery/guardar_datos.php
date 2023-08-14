<?php
include_once 'conexion.php';
$conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_database);
if ($conexion!=true){
    die('Error de conexion'.mysqli_connect_error());
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cel=$_POST['cel'];
$email = $_POST['email'];
$password = $_POST['password'];


if (empty($nombre) || empty($apellido) || empty($cel) || empty($email) || empty($password)) {
    echo 'Por favor, completa todos los campos.';
    exit; // Detener la ejecución del script si hay campos vacíos
}else{
    if (strlen($password) < 8) {
        $respuesta = 'La contraseña debe tener al menos 8 caracteres.';
        echo "<script>alert('$respuesta');window.location.href='registro.php';</script>";
    } 
     else if (!preg_match('/^\d{6,}$/', $cel)) {
        $error = 'Debe poner un numero de telefono o celular valido.';
        echo "<script>alert('$error');window.location.href='registro.php';</script>";
    } else {

} }



// Crear la consulta SQL para insertar los datos en la tabla "cliente"
$sql = "INSERT INTO cliente (Nombres, Apellidos, telefono, Correo, Contraseña) VALUES ('$nombre', '$apellido', '$cel', '$email', '$password')";

// Ejecutar la consulta
if (mysqli_query($conexion, $sql)) {
    echo 'Los datos se han guardado correctamente.';
} else {
    echo 'Error al guardar los datos: ' . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>

