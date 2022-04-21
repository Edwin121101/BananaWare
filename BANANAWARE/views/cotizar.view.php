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
  <script type="text/javascript" src="views/js/funciones.js"></script>

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
                    <?php 
                      if (!isset($_SESSION['usuario'])) {
                        echo '<a href="IS.php" class="navegacion__enlace">Iniciar Sesión</a>';
                      }
                     ?>
                </nav>
            </div>
        </div>
    </header>
    <div hidden="">
      <input id="CO" value="<?php echo $CO; ?>">
      <input id="CD" value="<?php echo $CD; ?>">
      <input id="TD" value="<?php echo $_GET['TD']; ?>">
    </div>

    <div class="jumbotron text-center">
      <div class="page-header">
        <div class="container">
          <h3>INFORMACIÓN SOBRE COTIZACIÓN</h3>
          <h4>Fecha de consulta: <?php echo date('d'); ?>/<?php echo date('m'); ?>/<?php echo date('Y') ?></h4>
          <h5>Codigo postal de origen: <?php echo $CO ?></h5>
          <h5>Codigo postal de destino: <?php echo $CD; ?></h5>
          <h5>Distancia: <?php echo $_GET['Dist']; ?>Km</h5>
          <h5>Peso Volumétrico: <?php echo $peso_vol; ?>Kg/cm^3 </h5>
        </div>
      </div>
    </div>

    <div id="OyD" class="container-fluid">
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationCustom08"><h4>Origen</h4></label>
          <p>Estado de la republica:</p><input type="text" class="form-control" id="Edo_O" value="">
          <p>Municipio/Delegación:</p><input type="text" class="form-control" id="Del_O" value="">
          <p>Calle:</p><input type="text" class="form-control" id="St_O" value="">
          <p>Colonia:</p><input type="text" class="form-control" id="Col_O" value="">
          <p>Número exterior:</p><input type="text" class="form-control" id="Num_Ex_O" value="">
          <p>Teléfono:</p><input type="text" class="form-control" id="Tel_O" value="">
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationCustom09"><h4>Destino</h4></label>
          <p>Nombre del destinatario</p><input type="text" class="form-control" id="destino" value="">
          <p>Estado de la republica:</p><input type="text" class="form-control" id="Edo_D" value="">
          <p>Municipio/Delegación:</p><input type="text" class="form-control" id="Del_D" value="">
          <p>Calle:</p><input type="text" class="form-control" id="St_D" value="">
          <p>Colonia:</p><input type="text" class="form-control" id="Col_D" value="">
          <p>Número exterior:</p><input type="text" class="form-control" id="Num_Ex_D" value="">
          <p>Teléfono:</p><input type="tel" class="form-control" id="Tel_D" value="">
        </div>
      </div><br/>
    </div>
    <br/>
    <div id="TEnt" class="container-fluid">
      <p>Tiempo de entrega estimado: <?php echo $_GET['TD']; ?> día(s)</p>
      <center><h4>Días de entrega disponibles:</h4>
      <div class="form-check">
        <?php

            $semana = ["Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"] ;
            if (isset($_GET['TD'])) {
              $j = date("N")-1;
            }else{
              $j = 0;
            }
            for ($i=0; $i <= 6; $i++) { 
              if ($j>6) {
                $j=0;
              }
              if ($i>=(int)$_GET['TD']) {
                $check="checked";
              }else{
                $check="";
              }
              $div = '<input class="form-check-input" type="checkbox" '.$check.' disabled id="defaultCheck'.$i.'">
                      <label class="form-check-label" for="defaultCheck'.$i.'" >
                        '.$semana[$j].' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      </label>';
              echo $div;
              $j++;
            }
         ?>
        
      </div></center>
        <p>Se puede entregar: SÍ</p>

        

    </div>
    <br/>

    <div class="container-fluid">
      <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th colspan="2" scope="col">Descripción</th>
          <th scope="col">Tipo</th>
          <!--<th scope="col">Precio</th>-->
          <th scope="col">Precio</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td colspan="2">Servicios disponibles para la zona en la que se encuentra</td>
          <td>
            <select class="custom-select custom-select-lg mb-3" id="sel_servicio" onchange="cam_servicio()">
              <option selected>Normal</option>
              <option value="1">Normal</option>
              <option value="2">Express</option>
            </select>
          </td>
          <!--<td>$40.00</td>-->
          <td id="servicio">$100</td>
        </tr>

        <tr>
          <th scope="row">2</th>
          <td colspan="2">Cargos opcionales disponibles</td>
          <td>
            <select class="custom-select custom-select-lg mb-3" id="sel_opciones" onchange="cam_opciones()">
              <option selected>Seleccionar...</option>
              <option value="1">Ninguno</option>
              <option value="2">Frágil</option>
              <option value="3">Seguro</option>
            </select>
          </td>
          <!--<td>$40.00</td>-->
          <td id="opciones">$0</td>
        </tr>
        <tr>
          <td colspan="4">Costo con base al peso:</td>
          <td id="cost_weight">$<?php echo $cost_weight;
          ?></td>
          
        </tr>
        <!--
        <tr>
        <td colspan="4">Costo con base al tamaño:</td>
        <td id="cost_size">$<?php 
          //echo $peso_vol;
          ?></td>
        </tr>
         -->
        <tr>
          <td colspan="4">Subtotal:</td>
          <td id="sub_total">$<?php echo $sub; ?></td>
        </tr>
        <tr>
          <td colspan="4">Cargos fijos</td>
          <td id="fijos" >$<?php echo $fijos; ?></td>
        </tr>
        <tr>
          <td colspan="4"><h4>TOTAL:</h4></td>
          <td id="total">$<?php echo $total; ?></td>
        </tr>
      </tbody>
      </table>
    </div>
    <br/>
    <?php if (isset($_SESSION['usuario'])) {
      echo '<button style="background-color:#9e922a; border-color:#9e922a; color:white;" class="btn btn-primary btn-lg float-right" type="submit" onclick="val_Info()">
      Realizar pago
    </button>';
    } ?>
    <br/><br/>
    <!--Bootstrap, JQuery and other things-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
