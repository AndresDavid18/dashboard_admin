<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
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

            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-warning bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Contactanos</h1>
                            <p class="lead fw-normal text-muted mb-0">Estamos a tu disponibilidad</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- * * SB Forms Contact Form * *-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- This form is pre-integrated with SB Forms.-->
                                <!-- To make this form functional, sign up at-->
                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                <!-- to get an API token!-->
                                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">Nombre y Apellidos</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Se requiere un nombre.</div>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">Correo Electronico</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">El correo no es valido.</div>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                        <label for="phone">Numero de Telefono</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">Se requiere un numero telefonico.</div>
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                        <label for="message">Mensaje</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">Se requiere un mensaje.</div>
                                    </div>
                                    <!-- Submit success message-->
                                    <!---->
                                    <!-- This is what your users will see when the form-->
                                    <!-- has successfully submitted-->
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Formulario enviado correctamente</div>
                                            Para activar este formulario, regístrese en
                                            <br />
                                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                        </div>
                                    </div>
                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error al enviar el mensaje.</div></div>
                                    <!-- Submit Button-->
                                    <div class="container px-0">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 col-xxl-6">
                                                <div class="my-4">
                                                    <a class="btn btn-warning btn-lg" href="#scroll-target">Enviar</a>
                                                </div>
                                            </div>
                                        </div>
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
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; NY System 2023</div></div>
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
