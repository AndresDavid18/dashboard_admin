<!doctype html>
<html lang="en">

<head>
    <title>Editar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <?php
                include_once "conexion.php";
                $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
                if (!$conexion) {
                    echo "Error de conexión: " . mysqli_connect_error();
                    exit;
                }

                if (isset($_GET['id_cliente'])) {
                    $cliente_id = $_GET['id_cliente'];

                    if (isset($_POST['guardar'])) {
                        $nombres = $_POST['nombre'];
                        $apellidos = $_POST['apellido'];
                        $telefono = $_POST['telefono'];
                        $correo = $_POST['correo'];
                        $contraseña = $_POST['contraseña'];

                        $sql = "UPDATE `cliente` SET nombres='$nombres', apellidos='$apellidos', telefono='$telefono', correo='$correo', contraseña='$contraseña' WHERE id_cliente='$cliente_id'";

                        if (mysqli_query($conexion, $sql)) {
                            ?> <div class= "alert alert-warning" role="alert">
                           <?php echo "Actualizacion exitosa" . mysqli_error($conexion); ?> </div>
                      <?php  } else { ?>
                            <div class= "alert alert-danger" role="alert">
                           <?php echo "Error al actualizar los datos del cliente: " . mysqli_error($conexion); ?> </div> 
                        <?php }
                    }

                    $sql = "SELECT * FROM `cliente` 
                    WHERE id_cliente='$cliente_id'";
                    $resulSet = mysqli_query($conexion, $sql);
                    $row = mysqli_fetch_assoc($resulSet);
                } else {
                    echo "ID de cliente no proporcionado.";
                    exit;
                }
                ?>
                <form method="POST">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo $row['Nombres']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control" name="apellido" value="<?php echo $row['Apellidos']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" class="form-control" name="telefono" value="<?php echo $row['telefono']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="text" class="form-control" name="correo" value="<?php echo $row['correo']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="text" class="form-control" name="contraseña" value="<?php echo $row['Contraseña']; ?>">
                    </div>
                    <input type="hidden" name="id_cliente" value="<?php echo $row['id_Cliente'] ?>">

                    <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
                    <a href="tabla.php" class="btn btn-warning">Cancelar</a>

                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<?php mysqli_close($conexion)?>