<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="http://localhost/dashboard_admin/vistas/css/style.css">

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
				<a href="http://localhost/dashboard_admin/vistas/crud_inventario/">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Inventario</span>
				</a>
			</li>
			<li>
				<a href="http://localhost/dashboard_admin/delivery/tabla.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Usuarios</span>
				</a>
			</li>
			<li>
				<a href="http://localhost/dashboard_admin/delivery/tabla%20logins.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Inicio de Sesion</span>
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
				<a href="http://localhost/dashboard_admin/delivery/loginad.php" class="logout">
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

		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text"></span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Ordenes Nuevas</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Visitas</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total Ventas</p>
					</span>
				</li>
			</ul>




		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="http://localhost/dashboard_admin/vistas/js/script.js"></script>
</body>
</html>