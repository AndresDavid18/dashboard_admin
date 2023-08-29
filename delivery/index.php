<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pagina principal</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
    
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #333; /* Cambiado el color de fondo a un tono de negro menos intenso */
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      color: white;
    }

    .dropdown-content a {
      display: block;
      padding: 10px;
      text-decoration: none;
      border-bottom: 1px solid white;
      color: white; /* Cambiado el color del texto a blanco */
    }

    .dropdown-content a:last-child {
      border-bottom: none;

    }

    .dropdown-content a:hover {
      background-color: #FFCE26 ; /* Cambiado el color de fondo al pasar el mouse por encima */
      color: black; /* Cambiado el color del texto a negro */
    }

    .dropdown-content a:active {
      color: yellow; /* Cambiado el color del texto cuando el enlace está activo (seleccionado) */
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }
  
  </style>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!--barra de navegacion-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-white">
            <div class="container px-5">
                <label for="" class="brang">
                    <a href=""><img src="imagenes/logo.png" alt=""></a>
                </label>
                <a class="navbar-brand text-dark fw-bold" href="index.php">ㅤ𝐧𝐞𝐰 𝐲𝐨𝐫𝐤 𝐛𝐞𝐞𝐟 𝐛𝐮𝐫𝐠𝐮𝐞𝐫</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link text-dark " href="index.php">𝘐𝘯𝘪𝘤i𝘰</a></li>
                        <li class="nav-item"><a class="nav-link text-dark " href="#features">𝘕𝘰𝘴𝘰𝘵𝘳𝘰𝘴</a></li>
                        <li class="nav-item"><a class="nav-link text-dark " href="contact.php">𝘊𝘰𝘯𝘵𝘢𝘤𝘵𝘢𝘯𝘰𝘴</a></li>

                        <div class="dropdown">
                            <button class="bi feature bg-dark bg-gradient text-white rounded-1 mb-1 bi-person"></button>
                            <div class="dropdown-content">
                                <li class="nav-item"><a href="loginad.php">Administrador</a></li>
                                <li class="nav-item"><a href="login.php">Usuario</a></li>
                            </div>
                        </div>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--barra de navegacion-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
            <div class="container px-5">
                <a class="navbar-brand text-white fw-bold" href="index.php">ㅤ</a>
            </div>
        </nav>

        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Los mejores platos con los mejores precios</h1>
                            <p class="lead fw-normal text-white-50 mb-4">Haz parte de la familia new york con las mejores comidas rapidas de la zona,
                                desde la comodidad de tu casa!</p>
                            <p class="lead fw-normal text-black-50 mb-4">_____________________________________________________________________</p>
                            <p class="lead fw-normal text-white mb-4">haz click en "ordena aqui" y pide tus platillos favoritos.</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn1 btn-lg px-4 me-sm-3 text-white-50" href="#menu">ORDENA AQUI</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="imagenes/ho123-removebg-preview.png" alt="..." /></div>
                </div>
            </div>
        </header>

        <!--barra de navegacion-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
            <div class="container px-5">
                <a class="navbar-brand text-white fw-bold" href="index.php">ㅤ</a>
            </div>
        </nav>

        <!--menu-->
        <main>
            <main id="menu">
                <div class="container my-5 bg-white-50">

                    <div class="container px-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-xxl-6">
                                <div class="text-center my-5">
                                    <h1 class="fw-bolder mb-3">Nuestra mision es ofrecer los mejores productos para toda la familia!</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="imagenes/d.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Hamburguesa Clásica</h5>
                                    <p class="card-text">¡La clásica de siempre! Con carne de res, queso cheddar, lechuga, tomate y salsa especial.</p>
                                    <p class="card-text"><strong>$5.99</strong></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="imagenes/papas fritas.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Papas Fritas</h5>
                                    <p class="card-text">¡Crujientes y deliciosas! Perfectas para acompañar cualquier platillo.</p>
                                    <p class="card-text"><strong>$2.99</strong></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="imagenes/j.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Ensalada César</h5>
                                    <p class="card-text">¡Una opción fresca y saludable! Lechuga romana, pollo a la parrilla, croutones y aderezo César.</p>
                                    <p class="card-text"><strong>$4.99</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="container px-5">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-xxl-6">
                                    <div class="text-center my-5">
                                        <a class="btn btn-warning btn-lg text-white" href="menu.php">Menu</a>
                                        <p class="lead fw-bold text-muted mb-4">¡Haz tu orden ahora mismo y obten lo mejor en comida rapida!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <!-- Features section-->
                <section class="py-5" id="features">
                    <div class="container px-5 my-5">
                        <div class="row gx-5">
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <h2 class="fw-bolder mb-0">Somos los mejores en:.</h2>
                            </div>
                            <div class="col-lg-8">
                                <div class="row gx-5 row-cols-1 row-cols-md-2">
                                    <div class="col mb-5 h-100">
                                        <div class="feature bg-warning bg-gradient text-white rounded-3 mb-3"><i class="bi bi-cart-fill"></i></div>
                                        <h2 class="h5">Comida Rapida</h2>
                                        <p class="mb-0">Contamos con una gran variedad de platos como Hamburguesas, Hotdogs, Mazorcadas, etc... Con los mejores ingredientes. Descubrelo entrado a nuestro menu!</p>
                                    </div>
                                    <div class="col mb-5 h-100">
                                        <div class="feature bg-warning bg-gradient text-white rounded-3 mb-3"><i class="bi bi-cash-coin"></i></div>
                                        <h2 class="h5">Mejores Precios</h2>
                                        <p class="mb-0">Aqui podras encontrar tus platos favoritos con los mejores precios y la mejor calidad de producccion, contando con comidas desde $5.000, ¡Que esperas ahora!</p>
                                    </div>
                                    <div class="col mb-5 mb-md-0 h-100">
                                        <div class="feature bg-warning bg-gradient text-white rounded-3 mb-3"><i class="bi bi-bicycle"></i></div>
                                        <h2 class="h5">Entrega Rapida</h2>
                                        <p class="mb-0">El personal de "NYBF" Esta altamente capacitado para hacer una entega inmediata a la puerta de su cas, con una sonrisa amable!</p>
                                    </div>
                                    <div class="col h-100">
                                        <div class="feature bg-warning bg-gradient text-white rounded-3 mb-3"><i class="bi bi-shop"></i></div>
                                        <h2 class="h5">Rapida Preparacion</h2>
                                        <p class="mb-0">Nuestro sistema esta capacitado para desde que el momento que usted haga su pedido, transcurra una media 30 minutos para su preparacion y empacado.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <!-- Testimonial section-->
                <div class="py-5 bg-dark">
                    <div class="container px-5 my-5">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-10 col-xl-7">
                                <div class="text-center">
                                    <div class="fs-4 mb-4 fst-italic text-white-50">"La mejor combinación de sabor y rapidez en cada platillo. con ingredientes frescos y deliciosos que te harán volver por más.ㅤㅤ ¡Te esperamos!"</div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                        <div class="fw-bold text-white">
                                            Andres Torres
                                            <span class="fw-bold text-primary mx-1">/</span>
                                            Gerente
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer-->
                <footer class="bg-white py-4 mt-auto">
                    <div class="container px-5">
                        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                            <div class="col-auto">
                                <div class="small m-0 text-dark">Copyright &copy; NY System 2023</div>
                            </div>
                            <div class="col-auto">
                                <a class="link-dark small" href="#!">Privacidad</a>
                                <span class="text-dark mx-1">&middot;</span>
                                <a class="link-dark small" href="#!">Terminos</a>
                                <span class="text-dark mx-1">&middot;</span>
                                <a class="link-dark small" href="#!">Contactanos</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- Bootstrap core JS-->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Core theme JS-->
                <script src="js/scripts.js"></script>
</body>

</html>