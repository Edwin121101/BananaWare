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
  <link rel="stylesheet" href="css/style.css">

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
                    <a href="herramientas.php" class="navegacion__enlace">Herramientas</a>
                    <a href="IS.php" class="navegacion__enlace">Iniciar Sesión</a>
                </nav>
            </div>
        </div>
    </header>

    <div class="jumbotron text-center">
      <div class="page-header">
        <div class="container">
          <h3>TIEMPO DE LLEGADA</h3>
          <h4>Fecha de consulta: 25/11/2021</h4>
          <h5>Codigo postal de origen: </h5>
          <h5>Codigo postal de destino: </h5>
        </div>
      </div>
    </div>

    <div id="Ties" class="container-fluid">
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationCustom10"><h4>Origen</h4></label>
          <p>Estado de la republica:</p>
          <p>Municipio o Delegación:</p>
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationCustom11"><h4>Destino</h4></label>
          <p>Estado de la republica:</p>
          <p>Municipio o Delegación:</p>
        </div>
      </div>
    </div>
    <br/>
    <div id="TEnt" class="container-fluid">
      <p>Tipo de entrega: Diaria</p>
      <h4>Días de entrega disponibles:</h4>
      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Lunes
      </label><br/>
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
      <label class="form-check-label" for="defaultCheck1">
        Martes
      </label><br/>
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
      <label class="form-check-label" for="defaultCheck1">
        Miércoles
      </label><br/>
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
      <label class="form-check-label" for="defaultCheck1">
        Jueves
      </label><br/>
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
      <label class="form-check-label" for="defaultCheck1">
        Viernes
      </label><br/>
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
      <label class="form-check-label" for="defaultCheck1">
        Sábado
      </label><br/>
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
      <label class="form-check-label" for="defaultCheck1">
        Domingo
      </label>
      </div>
        <p>Ocurre Forzozo: NO</p>
    </div>
    <br/>

    <!--Bootstrap, JQuery and other things-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
