<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Contactanos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
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
                    </div>
                </div>
            </nav>

            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-warning bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Contactanos</h1>
                            <p class="lead fw-normal text-muted mb-0">Estamos aquí para ayudarte, así que no dudes en ponerte en contacto con nosotros.</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <!-- Formulario de contacto -->
                                <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <!-- Nombre -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" name="name" type="text" placeholder="Ingrese su nombre..." required />
                                        <label for="name">Nombre completo</label>
                                    </div>
                                    <!-- Correo electrónico -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="correo" name="correo" type="email" placeholder="Ingrese su correo electrónico..." required />
                                        <label for="correo">Correo electrónico</label>
                                    </div>
                                    <!-- Número de teléfono -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="number" name="number" type="tel" placeholder="Ingrese su número de teléfono..." pattern="[0-9]{5,}" required />
                                        <label for="number">Número de teléfono</label>
                                    </div>
                                    <!-- Mensaje -->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" name="message" placeholder="Escriba su mensaje aquí..." style="height: 10rem" required></textarea>
                                        <label for="message">Mensaje</label>
                                    </div>
                                    <!-- Botón de envío -->
                                    <div class="d-grid justify-content-center">
                                        <button class="btn btn-warning btn-lg" id="submitButton" name="enviar" type="submit">Enviar</button>
                                    </div>
                                    

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto">
                        <div class="small text-muted">&copy; 2023 Your Name. All Rights Reserved.</div>
                    </div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['enviar'])) {
        
        $name = $_GET["name"];
        $email = $_GET["correo"];
        $phone = $_GET["number"];
        $message = $_GET["message"];

        $errors = array();

        if (empty($name)) {
            $errors[] = "El nombre es obligatorio.";
        }

        if (empty($email)) {
            $errors[] = "El correo electrónico es obligatorio.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "El correo electrónico ingresado no es válido.";
        }

        if (empty($phone)) {
            $errors[] = "El número de teléfono es obligatorio.";
        }

        if (empty($message)) {
            $errors[] = "El mensaje es obligatorio.";
        }

        if (count($errors) == 0) {
            // Si no hay errores, procesa el formulario
            // Aquí puedes agregar la lógica para enviar el correo electrónico o guardar los datos en la base de datos
            // ...
            echo "¡Formulario enviado correctamente!";
        } else {
            // Si hay errores, muestra los mensajes de error
            echo "<ul>";
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }
    }
    ?>

</html>
