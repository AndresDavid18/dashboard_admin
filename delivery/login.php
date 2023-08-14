<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Inicia-sesion</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>
<script>
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

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
    <!--barra de navegacion-->



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container px-5">
        <label for="" class="brang">
          <a href=""><img src="imagenes/logo.png" alt=""></a>
        </label>
        <a class="navbar-brand text-white fw-bold" href="index.php">ㅤ𝐧𝐞𝐰 𝐲𝐨𝐫𝐤 𝐛𝐞𝐞𝐟 𝐛𝐮𝐫𝐠𝐮𝐞𝐫</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link text-white " href="index.php">𝘐𝘯𝘪𝘤𝘪𝘰</a></li>
            <li class="nav-item"><a class="nav-link text-white " href="#features">𝘕𝘰𝘴𝘰𝘵𝘳𝘰𝘴</a></li>
            <li class="nav-item"><a class="nav-link text-white " href="contact.php">𝘊𝘰𝘯𝘵𝘢𝘤𝘵𝘢𝘯𝘰𝘴</a></li>
            <li class="nav-item"><a class="bi feature bg-dark bg-gradient text-white rounded-1 mb-1 bi-person " href="login.php"></a></li>
            <li class="nav-item dropdown">
            </li>
          </ul>
          </li>
          </ul>
        </div>
      </div>
    </nav>
  </main>

  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="imagenes/ho123-removebg-preview.png" style="width: 1000px;" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="" method="post" onsubmit="return validateForm();">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <h1 class="display-12 fw-bolder text-dark mb-2">Inciar Sesion </h1>
            </div>

            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">aqui</p>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="email" name='email' class="form-control form-control-lg" placeholder="Ingresa un correo electrónico válido" value="<?php echo isset($email) ? $email : ''; ?>" required />
              <label class="form-label fw-bold" for="email">Correo Electrónico</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="password" name='password' class="form-control form-control-lg" placeholder="Ingresa tu contraseña" value="<?php echo isset($password) ? $password : ''; ?>" required />
              <label class="form-label fw-bold" for="password">Contraseña</label>
            </div><?php
                  if (isset($_POST['ingresar'])) {
                    include('conexion.php');
                    $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
                    if (!$conexion) {
                      die("Error al conectar a la base de datos: " . mysqli_connect_error());
                    }

                    $email = isset($_POST['email']) ? $_POST['email'] : '';
                    $password = isset($_POST['password']) ? $_POST['password'] : '';
                  

                    $query = "SELECT id_Cliente, correo, contraseña FROM cliente WHERE correo = '$email' AND contraseña = '$password'";
                    $resultado = mysqli_query($conexion, $query);

                    if (strpos($email, '@') !== false && mysqli_num_rows($resultado) == 1) {
                      $row = mysqli_fetch_assoc($resultado);
                      $idCliente = $row['id_Cliente'];
                      // Correo válido y contraseña válida
                      if (strlen($password) >= 8) {
                        // Insertar registro de inicio de sesión en la tabla "inicio"
                        $insertQuery = "INSERT INTO login (id_cliente, fecha) VALUES ('$idCliente', NOW())";
                        mysqli_query($conexion, $insertQuery);

                        // Redirigir al usuario a index.php
                        echo "<script>window.location.href='index.php';</script>";
                        exit;
                      } else {
                        // Contraseña inválida
                  ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Contraseña incorrecta.</strong> Verifica los campos ingresados.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php
                      }
                    } else {
                      // Correo inválido o contraseña incorrecta
                ?>
                <div class="alert alert-danger" role="alert">Correo o contraseña incorrecta.</div>
            <?php
                    }
                  }
            ?>


            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="password" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Recordar Cuenta
                </label>
              </div>
              <a href="#!" class="text-body">¿Olvido Su Contraseña?</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-warning btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name='ingresar'>Ingresar</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">¿No Tiene Una Cuenta? <a href="registro.php" class="link-danger">Registrarse</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>

    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
      <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
          <div class="col-auto">
            <div class="small m-0 text-white">Copyright &copy; NY System 2023</div>
          </div>
          <div class="col-auto">
            <a class="link-light small" href="#!">Privacidad</a>
            <span class="text-white mx-1">&middot;</span>
            <a class="link-light small" href="#!">Terminos</a>
            <span class="text-white mx-1">&middot;</span>
            <a class="link-light small" href="#!">Contactanos</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>