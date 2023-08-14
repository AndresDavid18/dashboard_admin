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
		<a href="http://localhost/dashboard_admin/vistas/" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Delivery System</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="http://localhost/dashboard_admin/vistas/">
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
					<span class="text"></span>
				</a>
			</div>

            <div class="container mt-5">

<?php include('message.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Agregar  
                    <a href="index.php" class="btn btn-danger float-end">Atras</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST">

                    <div class="mb-3">
                        <label>Categoria</label>
                        <input type="text" name="categoria" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Nombre Del insumo</label>
                        <input type="text" name="nombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Proveedor</label>
                        <input type="text" name="proveedor" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Cantidad</label>
                        <input type="number" name="cantidad" class="form-control">
                    </div>
                    <div class="mb-3">
                    <div class="mb-3">
                        <label>Unidad Medida</label>
                        <input type="text" name="unidad" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>actualización</label>
                        <input type="date" name="actualización" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="save_student" class="btn btn-primary">Agregar</button>
                    </div>

                </form>
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