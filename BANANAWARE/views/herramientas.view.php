<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Opciones</title>
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
                    <a href="Rastreo.php" class="navegacion__enlace">Rastreo</a>
                    <a href="IS.php" class="navegacion__enlace">Iniciar Sesión</a>
                </nav>
            </div>
        </div>
    </header>

    <br/><br/>
    <!--INCIA LOS TRES APARTADOS-->
    <div class="container" id="TodoC">
      <div class="accordion" id="accordionExample">

      <div class="card">
        <div class="card-header" id="headingOne">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <h4 style="color:#000000; hover:#000000;">Cotizar envio</h4>
            </button>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div id="Cotizar" class="card-body">
            <!--ORIGEN Y DESTINO-->
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom01">Código postal origen</label>
                <input type="text" class="form-control" id="validationCustom01" value="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Código postal destino</label>
                <input type="text" class="form-control" id="validationCustom02" value="">
              </div>
            </div>
            <!--FIN ORIGEN Y DESTINO-->
            <!--TAMAÑO-->
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationCustom03">Tamaño del paquete</label>
                <br/>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Pequeño (XX cm x XX cm x XX cm)</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Mediano (XX cm x XX cm x XX cm)</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                <label class="form-check-label" for="inlineRadio3">Grande (XX cm x XX cm x XX cm)</label>
              </div>
              </div>
            </div>
            <!--FIN TAMAÑO-->
            <div id="Botones">
              <a href="cotizar.php"><button style="background-color:#000000; border-color:#000000; color:white;" class="btn btn-primary" type="submit">CONSULTAR</button></a>
            </div>
          </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <h4 style="color:#000000;">Cotizar tiempo de llegada de envio</h4>
            </button>
          </h5>
        </div>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div id="Solicitar" class="card-body">

            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom03">Código postal origen</label>
                <input type="text" class="form-control" id="validationCustom03" value="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom04">Código postal destino</label>
                <input type="text" class="form-control" id="validationCustom04" value="">
              </div>
            </div>

            <div id="Botones">
              <a href="tiempos.php"><button style="background-color:#000000; border-color:#000000; color:white;" class="btn btn-primary" type="submit">CONSULTAR</button></a>
            </div>

          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <h4 style="color:#000000;">Sucursales de envio</h4>
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">

            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom05">Estado de la republica</label>
                <select class="form-control form-control-lg">
                  <option>Default select</option>
                </select>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom06">Municipio/Delegación</label>
                <select class="form-control form-control-lg">
                  <option>Default select</option>
                </select>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom07">Colonia</label>
                <select class="form-control form-control-lg">
                  <option>Default select</option>
                </select>
              </div>
            </div>

            <div id="Botones">
              <a href="sucursal.php"><button style="background-color:#000000; border-color:#000000; color:white;" class="btn btn-primary" type="submit">BUSCAR</button></a>
            </div>

          </div>
        </div>
      </div>
    </div>
    </div>






    <!--Bootstrap, JQuery and other things-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
