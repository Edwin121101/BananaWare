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
                    <a href="IS.php" class="navegacion__enlace">Iniciar Sesión</a>
                </nav>
            </div>
        </div>
    </header>

    <br/><br/><br/>
    <div class="container-fluid" style="background-color: #F7DC6F;
    background-size: cover;
    overflow: hidden;
    padding: 100px;">
      <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationCustom0001">Centro de recolección:</label>
              <select class="custom-select custom-select-lg mb-3">
                <option selected>Seleccionar...</option>
                <option value="1">La Condesa</option>
                <option value="2">Ecatepec</option>
                <option value="3">Polanco</option>
              </select>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom0002">Fecha:</label>
              <input type="date" class="form-control" id="validationCustom0002">
            </div><br/>
            <div class="col-md-4 mb-3">
              <label for="validationCustom0003">Hora:</label>
              <select class="custom-select custom-select-lg mb-3">
                <option selected>Seleccionar...</option>
                <option value="1">8 am</option>
                <option value="2">9 am</option>
                <option value="3">10 am</option>
                <option value="4">11 am</option>
                <option value="5">12 am</option>
                <option value="6">13 pm</option>
              </select>
            </div>
    </div>
  </div>
  <br/>
    <div id="Botones">
      <a href=""><button style="background-color:#9e922a; border-color:#9e922a; color:white;" class="btn btn-primary btn-lg" type="submit">
        Agendar cita
      </button></a>
    </div>
    <br/><br/><br/>





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
