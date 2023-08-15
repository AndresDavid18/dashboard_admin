<!doctype html>
<html lang="en">

<head>
    <title>Tabla</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#qwert').DataTable({
                'searching': false,
                'ordering': false
            });
        });
    </script>
    <style>
      

        .my-table {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<?php

include_once "conexion.php";
$conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_database);

$sql = 'SELECT l.idlogin, c.correo, l.fecha FROM login l
          INNER JOIN cliente c on l.id_cliente=c.id_Cliente';
$resultset = mysqli_query($conexion, $sql);
    

?>
 <div class="container my-container">
        <div class="row">
            <div class="col-10 d-flex align-items-center justify-content-center">
                <h1 class="display-12 fw-bolder text-dark mb-2">Reporte de Login</h1>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table" id='qwert'>
                <thead>
                    <tr>
                        <th scope="col">Numero</th>
                        <th scope="col">correo</th>
                        <th scope="col">fecha</th>
                        
            
                    
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    $cont=1;
                    while ($row = mysqli_fetch_row($resultset)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $cont; ?></th>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                           
                           

                           
                          
                           
            
                        </tr>
                    <?php
                     $cont++;
                    }
                    $conexion->close();
                    ?>
                </tbody>
            </table>
            <a href="http://localhost/dashboard_admin/vistas/"  class="btn btn-warning">Volver</a>
        </div>
    </div>
</div>
    
</body>
</html>
