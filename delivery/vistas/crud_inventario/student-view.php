<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="http://localhost/dashboard_admin/vistas/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Delivery System</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="http://localhost/dashboard_admin/vistas/crud.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">crud</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Compras</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Inventario</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Pedidos</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Configuración</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Cierre de sesión</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link"></a>
			<form action="#">
				<div class="form-input">
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->

		<main>
			<div class="head-title">
				<div class="left">
					<h1>Inventario</h1>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Descargar Analisis</span>
				</a>
			</div>


            <div class="container mt-5">
				


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Ver detalles de insumo 
                    <a href="index.php" class="btn btn-danger float-end">Atras</a>
                </h4>
            </div>
            <div class="card-body">

                <?php
                if(isset($_GET['codigo']))
                {
                    $codigo_id = mysqli_real_escape_string($con, $_GET['codigo']);
                    $query = "SELECT * FROM inventario WHERE codigo_id='$codigo' ";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $inventario = mysqli_fetch_array($query_run);
                        ?>
                        
                            <div class="mb-3">
                                <label>categoria</label>
                                <p class="form-control">
                                    <?=$inventario['categoria'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Nombre Del insumo</label>
                                <p class="form-control">
                                    <?=$Inventario['nombre'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Proveedor</label>
                                <p class="form-control">
                                    <?=$Inventario['proveedor'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Cantidad</label>
                                <p class="form-control">
                                    <?=$Inventario['cantidad'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Unidad Medida</label>
                                <p class="form-control">
                                    <?=$Inventario['unidad'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>actualización</label>
                                <p class="form-control">
                                    <?=$Inventario['actualización'];?>
                                </p>
                            </div>

                        <?php
                    }
                    else
                    {
                        echo "<h4>No Such Id Found</h4>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>


		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="http://localhost/dashboard_admin/vistas/js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>