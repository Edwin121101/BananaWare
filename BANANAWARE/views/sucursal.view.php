<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BananaWare</title>
  <link rel="stylesheet" href="views/css/normalize.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="views/css/style.css">

  <!--<script src='https://www.google.com/recaptcha/api.js'></script>-->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="views/css/style.css">

</head>
<body>
    <header class="header">

        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="index.php">
                    <h1 class="logo__nombre no-margin centrar-texto">Banana<span class="logo__bold">Ware</span></h1>
                </a>

                <nav class="navegacion">
                    <!-- <a href="herramientas.php" class="navegacion__enlace">Herramientas</a> -->
                    <?php if (!isset($_SESSION['usuario'])) {
                      echo '<a href="IS.php" class="navegacion__enlace">Iniciar Sesión</a>';
                    }else{
                      echo '<a href="CS.php" class="navegacion__enlace">Cerrar Sesión</a>';
                    } ?>
                </nav>
            </div>
        </div>
    </header>

    <div class="jumbotron text-center">
      <div class="page-header">
        <div class="container">
          <h3>BÚSQUEDA DE SURCURSALES</h3>
          <h4>Fecha de consulta: <?php echo date('d') ?>/<?php echo date('m') ?>/<?php echo date('Y') ?></h4>
        </div>
      </div>
    </div>
    <!--PRIMERA-->
    <center><div class="card mb-3" style="max-width: 800px; ">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="views/img/sucursal3.jpg" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">Sucursal: La Condesa</h3>
            <p class="card-text">Tipo de entrega: Diaria</p>
            <p class="card-text">Días de entrega disponibles</p>
            <p class="card-text">Estado de la Republica</p>
            <p class="card-text">Municipio/Delegación</p>
            <p class="card-text">Colonia</p>
            <p class="card-text">Calle</p>
            <p class="card-text">Código Postal</p>
            <p class="card-text">Teléfono</p>
          </div>
        </div>
      </div>
    </div></center>
    <!--SEGUNDA-->
    <center><div class="card mb-3" style="max-width: 800px; ">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="views/img/sucursal2.jpg" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">Sucursal: Ecatepec</h3>
            <p class="card-text">Tipo de entrega: Diaria</p>
            <p class="card-text">Días de entrega disponibles</p>
            <p class="card-text">Estado de la Republica</p>
            <p class="card-text">Municipio/Delegación</p>
            <p class="card-text">Colonia</p>
            <p class="card-text">Calle</p>
            <p class="card-text">Código Postal</p>
            <p class="card-text">Teléfono</p>
          </div>
        </div>
      </div>
    </div></center>
    <!--TERCERA-->
    <center><div class="card mb-3" style="max-width: 800px; ">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="views/img/sucursal1.jpg" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">Sucursal: Polanco</h3>
            <p class="card-text">Tipo de entrega: Diaria</p>
            <p class="card-text">Días de entrega disponibles</p>
            <p class="card-text">Estado de la Republica</p>
            <p class="card-text">Municipio/Delegación</p>
            <p class="card-text">Colonia</p>
            <p class="card-text">Calle</p>
            <p class="card-text">Código Postal</p>
            <p class="card-text">Teléfono</p>
          </div>
        </div>
      </div>
    </div></center>
    <br/>
    <div id="Botones">
      <a href="agendarcita.php"><button style="background-color:#9e922a; border-color:#9e922a; color:white;" class="btn btn-primary btn-lg" type="submit">
        Agendar cita de recolección
      </button></a>
    </div>
    <br/>
    <footer class="footer">
      <div class="contenedor">
          <div class="barra">
              <a class="logo" href="index.php">
                  <h1 class="logo__nombre no-margin centrar-texto">Banana<span class="logo__bold">Ware</span></h1>
              </a>

              <nav class="navegacion">
                  <a href="soporte.php" class="navegacion__enlace">Soporte</a>
                  <a href="rastreo.php" class="navegacion__enlace">Rastreo</a>
                  <!-- <a href="herramientas.php" class="navegacion__enlace">Cotización</a> -->
                  <a href="sucursal.php" class="navegacion__enlace">Centros de Recoleccion</a>
              </nav>
          </div>
      </div>
    </footer>
    <!--Bootstrap, JQuery and other things-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
