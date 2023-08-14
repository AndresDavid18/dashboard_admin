<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login Dasboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/login_db.css">
</head><script>
  function validateForm() {
    
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    
    if (email === '') {
      alert('Por favor, ingresa un correo electrónico válido.');
      return false;
    }

   
    if (password === '') {
      alert('Por favor, ingresa una contraseña');
      return false;
    }
    

    return true; // Si todas las validaciones pasan, el formulario se enviará al servidor.
  }
</script>

<body class="my-login-page">

<?php
if(isset($_REQUEST['login'])){
	session_start();
	$user=$_REQUEST['user']??'';
	$pass=$_REQUEST['contraseña']??'';
	include_once 'conexion.php';
	$conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
	$sql="SELECT usuario, contraseña from administrador where usuario='$user' and contraseña='$pass';";
	$resultSet=mysqli_query($conexion,$sql);
	
		$row=mysqli_fetch_assoc($resultSet);
		if($row){
	   $_SESSION['usuario']=$row['usuario'];
		$_SESSION['contraseña']=$row['contraseña'];
		$_SESSION['activo']=$row['1'];
		header("location:http://localhost/dashboard_admin/vistas/");
	}else{
		?>
		<div class="container">
			<div class="row">
				<div class="col-12 off-set=4 alert-warning">
					<div class= "alert alert-danger" role="alert">
						<strong>Usuario o contraseña incorrecta</strong>
				</div>
			</div>
		</div>
	</div>
	<?php
}
 }

?>

	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img img src="imagenes/logo.png" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Iniciar sesión</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="email">usuario</label>
									<input id="email" type="email" class="form-control" name="user" 
									value="<?php echo isset($user) ? $user : ''; ?>"required autofocus>
									<div class="invalid-feedback">
										Dirección de correo invalido
									</div>
								</div>

								<div class="form-group">
									<label for="password">Contraseña
										<a href="forgot.html" class="float-right text-dark">
											Olvido su contraseña?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="contraseña" 
									value="<?php echo isset($contraseña) ? $contraseña : ''; ?>"required  data-eye>
								    <div class="invalid-feedback">
								    	Se rerquiere contraseña
							    	</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Recordar cuenta</label>
									</div>
								</div>


                                <div class="form-group m-0">
                                    <a href="">
                                        <button type="submit" class="btn btn-warning text-light btn-block" name="login">
                                        Iniciar Sesión
                                        </button>
                                    </a>
									<div class="form-group m-0">
                                    <a href="index.php">
                                        <button type="button" class="btn btn-secondary text-light btn-block" name="login">
                                        Regresar
                                        </button>
                                    </a>
</div>
								
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2023 &mdash; New York Beef Burguer
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
