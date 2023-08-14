<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Error 404</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <style>

    body{
background-color: rgb(255, 244, 231);


    }
    .error-template {
      padding: 40px 15px;
      text-align: center;
      align-content: center; 
     border: 2px solid rgb(255, 250, 250) ;
     width: 100%;
     
    }
    .error-actions {
      margin-top: 50px;
      margin-bottom: 15px;
    }
    .btn {
      margin-right: 10px;
    }
    .container {
     align-content: center; 
     border: 2px solid rgb(255, 250, 250) ;
     width: 100%;
     height: 700px; 
     display: flex;
     flex-wrap: wrap;
     margin: 0 auto ;
     justify-content: center;
     

    
    }
   

  </style>
</head>
<body>


  <div class="container ">
    
     <div class="row">
      <div class="col-md-12">
        <div class="error-template">
          <h1>Oops!</h1>
          <img src="imagenes/hht-removebg-preview.png" height="150">
          
          <br>
          <h2>Error 404</h2>
            <br>
           <h4> La Pagina No Funciona</h4>
          <div class="error-details">
            Lo sentimos, la URL solicitada no se encontró en este servidor.
          <div class="error-actions">
            <a href="index.php" class="btn btn-warning btn-lg">Ir a inicio</a>
            <a href="#" class="btn btn-secondary btn-lg">Contactarse con soporte</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>
</html>
