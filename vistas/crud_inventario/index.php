<?php
$con = mysqli_connect("localhost","root","","Delivery_System");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
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
			

			<div class="container mt-4">

<?php include('message.php'); ?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>Insumos
					<a href="student-create.php" class="btn btn-primary float-end">Agregar Insumos</a>
				</h4>
			</div>
			<div class="card-body">

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Categoria</th>
							<th>Nombre Insumo</th>
							<th>Proveedor</th>
							<th>Cantidad</th>
							<th>Medida</th>
							<th>Actualización</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$query = "SELECT * FROM inventario";
							$query_run = mysqli_query($con, $query);

							if(mysqli_num_rows($query_run) > 0)
							{
								foreach($query_run as $Inventario)
								{
									?>
									<tr>
										<td><?= $Inventario['codigo']; ?></td>
										<td><?= $Inventario['categoria']; ?></td>
										<td><?= $Inventario['nombre']; ?></td>
										<td><?= $Inventario['proveedor']; ?></td>
										<td><?= $Inventario['cantidad']; ?></td>
										<td><?= $Inventario['unidad']; ?></td>
										<td><?= $Inventario['actualización']; ?></td>
										<td>
											<a href="student-view.php"?codigo=<?= $Inventario['codigo']; ?>" class="btn btn-info btn-sm">Ver</a>
											<a href="student-edit.php"?codigo=<?= $Inventario['codigo']; ?>" class="btn btn-success btn-sm">Editar</a>
											<form action="code.php" method="POST" class="d-inline">
												<button type="submit" name="delete_insumo" value="<?=$Inventario['codigo'];?>" class="btn btn-danger btn-sm">Eliminar</button>
											</form>
										</td>
									</tr>
									<?php
								}
							}
							else
							{
								echo "<h5> No se ha encontrado ningún registro </h5>";
							}
						?>
						
					</tbody>
				</table>

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