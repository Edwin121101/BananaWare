<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>BananaWare Index</title>
  <link rel="stylesheet" href="views/css/normalize.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" href="views/css/style.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="views/js/funciones.js"></script>

  <script src="http://www.google.com/jsapi"></script>
</head>

<body class="decoracion">
  <header class="header">

    <div class="contenedor">
      <div class="barra">
        <a class="logo" href="index.php">
          <h1 class="logo__nombre no-margin centrar-texto">Banana<span class="logo__bold">Ware</span></h1>
        </a>

        <nav class="navegacion">
          <a href="sucursal.php" class="navegacion__enlace">Centros de Recoleccion</a>
          <a href="rastreo.php" class="navegacion__enlace">Rastreo</a>
          <?php if (!isset($_SESSION['usuario'])) {
            echo '<a href="IS.php" class="navegacion__enlace">Iniciar Sesión</a>';
          }else{
            echo '<a href="CS.php" class="navegacion__enlace">Cerrar Sesión</a>';
          } ?>
        </nav>
      </div>
    </div>
  </header>

  <br>

  <div class="contenedor contenido-principal">
    <main class="blog">
      <h4>Servicio de Mensajería</h4>

      <article class="entrada">

        <div class="entrada__contenido">

          <p>Realiza entregas locales en menos de 90 minutos desde tu computadora o App, cotiza tus servicios
            directo en
            la plataforma.
            Sin tarifas dinámicas: pagas lo marcado en la cotización. Calculamos la mejor ruta de entrega
            para que
            pagues menos. ¡Estamos revolucionando la mensajería express!</p>
          <a href="registro.php" class="boton_user boton--primario">Registrarse</a>
        </div>
      </article>




    </main>
    <aside class="sidebar">
      <h4>¿Quieres enviar un paquete?</h4>

      <div class="entrada__imagen">
        <!--<center>-->
        <picture>
          <img loading="lazy" src="views/img/repartidor.png" alt="imagen blog">
        </picture>
        <!--</center>-->
      </div>
    </aside>
  </div>

  <!--INCIA LOS TRES APARTADOS-->
  <!--<div class="container deco-none" id="TodoC">-->
  <div class="accordion" id="accordionExample">

    <div class="card">
      <div class="card-header" id="headingOne">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h4 style="color:#000000; hover:#000000;">Cotizar envio</h4>
        </button>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div id="Cotizar" class="card-body">
          <div class="form-row">

            <div class="col-md-4 mb-3">
              <label for="validationCustom01000">Escoge el tipo de cotización:</label>
            </div>
            <div class="col-md-4 mb-3">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio1" name="customRadioC" class="custom-control-input" onchange="cambioTipo(this)">
                <label class="custom-control-label" for="customRadio1">Envío desde domicilio</label>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio2" name="customRadioC" class="custom-control-input" onchange="cambioTipo(this)">
                <label class="custom-control-label" for="customRadio2">Envío desde centro de recolección</label>
              </div>
            </div>
          </div>

          <!--ORIGEN Y DESTINO-->
          <div class="form-row">
            <div class="col-md-6 mb-3"id="cod_origen">
              <label for="validationCustom01">Código postal origen</label>
              <input type="text" class="form-control" id="CO" value="">
            </div>
             <div class="col-md-6 mb-3" id="centros_opciones" style="display:none ">
            <label for="validationCustom02999">Centros de recolección:</label>
            <select class="custom-select" id="Centros">
              <option selected disabled value="">Seleccionar...</option>
              <option value="11560">Polanco V sección</option>
              <option value="55020">Ecatepec, 10 de Abril</option>
              <option value="6140">La Condesa</option>
            </select>
          </div>
            <div class="col-md-6 mb-3">
              <label for="validationCustom02">Código postal destino</label>
              <input type="text" class="form-control" id="CD" value="">
            </div>
          </div> 
          <!--FIN ORIGEN Y DESTINO-->
          
          <!--TAMAÑO-->
          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationCustom03">Tamaño del paquete</label>
              <br />
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radio1" value="little">
                <label class="form-check-label" for="inlineRadio1">Pequeño (15 cm x 15 cm x 15 cm)</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radio2" value="medium">
                <label class="form-check-label" for="inlineRadio2">Mediano (25 cm x 25 cm x 25 cm)</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radio3" value="big">
                <label class="form-check-label" for="inlineRadio3">Grande (40 cm x 40 cm x 40 cm)</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radio4" value="envelope">
                <label class="form-check-label" for="inlineRadio4">Sobre para documentos</label>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom0299">Peso del paquete(Kg):</label>
              <input type="text" class="form-control" id="peso" value="">
            </div>
            <!--Acá va lo que borre jiji-->
          </div>
          <!--FIN TAMAÑO-->
          <div id="Botones">
            <button style="background-color:#000000; border-color:#000000; color:white;" class="btn btn-primary" onclick="pre_cotizacion()">CONSULTAR</button>
          </div>
        </div>
      </div>
    </div>


    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <h4 style="color:#000000;">Estimar tiempo de llegada de envio</h4>
          </button>
        </h5>
      </div>

      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div id="Solicitar" class="card-body">

          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom03">Código postal origen</label>
              <input type="text" class="form-control" id="CO_T" value="">
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationCustom04">Código postal destino</label>
              <input type="text" class="form-control" id="CD_T" value="">
            </div>
          </div>

          <div id="Botones">
            <button style="background-color:#000000; border-color:#000000; color:white;" class="btn btn-primary" onclick="pre_t_cotizacion()">CONSULTAR</button>
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
            <div class="col-md-12 mb-3">
              <label for="validationCustom03">Código postal origen</label>
              <input type="text" class="form-control" id="validationCustom50" value="">
            </div>
          </div>

          <div id="Botones">
            <a href="sucursal.php"><button style="background-color:#000000; border-color:#000000; color:white;" class="btn btn-primary" type="submit">BUSCAR</button></a>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!--</div>-->

  <br>

  <footer class="footer">
    <div class="contenedor">
      <div class="barra">
        <a class="logo" href="index.php">
          <h1 class="logo__nombre no-margin centrar-texto">Banana<span class="logo__bold">Ware</span></h1>
        </a>

        <nav class="navegacion">
          <a href="soporte.php" class="navegacion__enlace">Soporte</a>
          <a href="rastreo.php" class="navegacion__enlace">Rastreo</a>
          <a href="sucursal.php" class="navegacion__enlace">Centros de Recoleccion</a>
        </nav>
      </div>
    </div>
  </footer>
  <div class="derechos">
    <center>
      <p class="no-margin">Todos los derechos reservados</p>
    </center>
  </div>

  <script src="views/js/modernizr.js"></script>
  <!--Bootstrap, JQuery and other things-->

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>