
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Registrate</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <script>
    function validateForm() {
      var nombre = document.getElementById('nombre').value;
      var apellido = document.getElementById('apellido').value;
      var email = document.getElementById('email').value;
      var email2 = document.getElementById('email2').value;
      var password = document.getElementById('password').value;
      var cel = document.getElementById('cel').value;

      if (nombre === '') {
        alert('Por favor, ingresa tu nombre completo');
        return false;
      }
      if (apellido === '') {
        alert('Por favor, ingresa tus apellidos');
        return false;
      }

      if (email === '') {
        alert('Por favor, ingresa un correo electrónico válido.');
        return false;
      }

      if (email !== email2) {
        alert('Los correos electrónicos no coinciden.');
        return false;
      }
      if (password === '') {
        alert('Por favor, ingresa una contraseña');
        return false;
      }
      if (cel === '') {
        alert('Por favor, ingresa un número de contacto');
        return false;
      }

      return true; // Si todas las validaciones pasan, el formulario se enviará al servidor.
    }
  </script>
</head>

<body>
  <!--barra de navegacion-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
      <label for="" class="brang">
        <a href=""><img src="imagenes/logo.png" alt=""></a>
      </label>
      <a class="navbar-brand text-white fw-bold" href="index.php">ㅤ𝐧𝐞𝐰 𝐲𝐨𝐫𝐤 𝐛𝐞𝐞𝐟 𝐛𝐮𝐫𝐠𝐮𝐞𝐫</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link text-white " href="index.php">𝘐𝘯𝘪𝘤𝘪𝘰</a></li>
          <li class="nav-item"><a class="nav-link text-white " href="#features">𝘕𝘰𝘴𝘰𝘵𝘳𝘰𝘴</a></li>
          <li class="nav-item"><a class="nav-link text-white " href="contact.php">𝘊𝘰𝘯𝘵𝘢𝘤𝘵𝘢𝘯𝘰𝘴</a></li>
          <li class="nav-item"><a class="bi feature bg-dark bg-gradient text-white rounded-1 mb-1 bi-person "
              href="login.php"></a></li>
          <li class="nav-item dropdown">
          </li>
        </ul>
      </div>
    </div>
  </nav>
  

  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="imagenes/ho123-removebg-preview.png" style="width: 1000px;" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="" method="post" onsubmit="return validateForm();">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <h1 class="display-12 fw-bolder text-dark mb-2">Registrate ahora</h3>
            </div><div class="container">
    <div class="row">
      <div class="col-12 " >
        <?php
               
                if (isset($_POST['enviar'])) {
                    include_once 'conexion.php';
                    $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
                    if (!$conexion) {
                        die('Error de conexión' . mysqli_connect_error());
                    }
                
                    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
                    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
                    $cel = isset($_POST['cel']) ? $_POST['cel'] : '';
                    $email = isset($_POST['email']) ? $_POST['email'] : '';
                    $password = isset($_POST['password']) ? $_POST['password'] : '';
                
                    if (empty($nombre) || empty($apellido) || empty($cel) || empty($email) || empty($password)) {
                        echo 'Por favor, completa todos los campos.';
                        exit; // Detener la ejecución del script si hay campos vacíos
                    } else {
                        if (strlen($password) < 8) {
                            echo '<div class="alert alert-danger" role="alert">La contraseña debe tener al menos 8 caracteres.</div>';
                        } else if (!preg_match('/^\d{6,}$/', $cel)) {
                            echo '<div class="alert alert-danger" role="alert">Debe poner un número de teléfono o celular válido.</div>';
                        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            echo '<div class="alert alert-danger" role="alert">Dirección de correo no válida, ingrese una dirección válida.</div>';
                        } else {
                          // Escapar los valores para evitar inyección de SQL
                          $nombre = mysqli_real_escape_string($conexion, $nombre);
                          $apellido = mysqli_real_escape_string($conexion, $apellido);
                          $cel = mysqli_real_escape_string($conexion, $cel);
                          $email = mysqli_real_escape_string($conexion, $email);
                          $password = mysqli_real_escape_string($conexion, $password);
                          // Crear la consulta SQL para insertar los datos en la tabla "cliente"
                          $sql = "INSERT INTO cliente (Nombres, Apellidos, telefono, Correo, Contraseña) VALUES ('$nombre', '$apellido', '$cel', '$email', '$password')";
                          // Ejecutar la consulta
                          if (mysqli_query($conexion, $sql)) {
        
                             $mess = 'Los datos se guardaron correctamente, ya puede iniciar sesión';
                              echo "<script>alert('$mess');window.location.href='login.php';</script>";
        
                          } else {
                              echo 'Error al guardar los datos: ' . mysqli_error($conexion);
                          }
                      }
                  }
                  mysqli_close($conexion);
                }
                ?>
      </div>
    </div>
  </div>

            <!-- Nombre input -->
            <div class="form-outline mb-4">
              <input type="text" id="nombre" name='nombre' class="form-control form-control-lg"
                placeholder="Ingresa tu nombre completo" value="<?php echo isset($nombre) ? $nombre : ''; ?>"required/>
              <label class="form-label fw-bold" for="nombre">Nombre</label>
            </div>

            <!-- Apellido input -->
            <div class="form-outline mb-4">
              <input type="text" id="apellido" name='apellido' class="form-control form-control-lg"
                placeholder="Ingresa tu apellido" value="<?php echo isset($apellido) ? $apellido : ''; ?>"required/>
              <label class="form-label fw-bold" for="apellido">Apellido</label>
            </div>

            <!-- celular input -->
            <div class="form-outline mb-4">
              <input type="text" id="cel" name='cel' class="form-control form-control-lg"
                placeholder="Ingresa tu número de contacto" value="<?php echo isset($cel) ? $cel : ''; ?>"required/>
              <label class="form-label fw-bold" for="cel">Celular</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="email" name='email' class="form-control form-control-lg"
                placeholder="Ingresa un correo electrónico válido" value="<?php echo isset($email) ? $email : ''; ?>"required/>
              <label class="form-label fw-bold" for="email">Correo Electrónico</label>
            </div>

            <!-- Confirmar Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="email2" name='email2' class="form-control form-control-lg"
                placeholder="Verificar correo electrónico" required/>
              <label class="form-label fw-bold" for="email2">Verificar Email</label>
            </div>

            <!-- Contraseña input -->
            <div class="form-outline mb-3">
              <input type="password" id="password" name='password' class="form-control form-control-lg"
                placeholder="Ingresa tu contraseña" value="<?php echo isset($password) ? $password : ''; ?>" required/>
              <label class="form-label fw-bold" for="password">Contraseña</label>
            </div>
            

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Recordar Cuenta
                </label>
              </div>
              <button type="submit" class="btn btn-warning" name='enviar' value='enviar'>Completar</button>
             
            </div>
          </form>
         
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap core JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>
