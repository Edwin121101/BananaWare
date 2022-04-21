<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Realizar pagos</title>
    <link rel="stylesheet" href="views/css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
    <link rel="stylesheet" href="views/css/style.css">
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
    <div hidden=true>
        <input id="Sub_T" value="<?php echo($_GET['Sub_T'])?>">
        <input id="fijos" value="<?php echo($_GET['fijos'])?>">
        <input id="CO" value="<?php echo($_GET['CO'])?>">
        <input id="CD" value="<?php echo($_GET['CD'])?>">
        <input id="TD" value="<?php echo($_GET['TD'])?>">
        <input id="direccion" value="<?php echo($_GET['direccion_d'])?>">
        
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm personal_info">
                <h4>01 INFORMACIÓN GENERAL</h4>
                <p class="mt-4">Datos del envio</p>

                <div class="row mb-5">
                    <div class="col">
                            <h3>Remitente</h3>
                            <label class="form-check-label" for="nome">
                              <h4><?php 
                              echo $_SESSION['usuario']; ?></h4>
                            </label>
                            <p>
                              <?php echo $_GET['direccion_o']; ?> C.P. <?php echo $_GET['CO']; ?> <br/>
                            </p>
                            <h3>Destinatario</h3>
                            <label class="form-check-label" for="nome">
                              <h4><?php echo $_GET['destino']; ?></h4>
                            </label>
                            <p>
                                <?php echo $_GET['direccion_d']; ?> C.P. <?php echo $_GET['CD']; ?> <br/>
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-sm mb-4 ship-payment">
                <h4>02 FORMA DE PAGO</h4>
                <div class="form-check mt-4 credit">
                   
                </div>


                <form action="" class="mt-4">
                    <div class="form-group">
                        <label for="titular">Nombre del titular</label>
                        <input type="text" class="form-control" id="nom_tit" placeholder="Nombre">
                    </div>

                    <div class="form-group">
                        <label for="numeroCartao">Números de la tarjeta de crédito (16 dígitos)</label>
                        <input type="text" class="form-control" id="num_tar" placeholder="XXXX XXXX XXXX XXXX">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="month">Mes</label>
                                <select class="form-control" id="m_date">
                                  <option>Seleccionar...</option>
                                  <?php 
                                    for ($i=1; $i < 13; $i++) { 
                                        echo '<option value="'.date('m',mktime(0,0,0,$i,1,1)).'">'.date('m',mktime(0,0,0,$i,1,1)).'</option>';
                                    }
                                   ?>
                                </select>
                              </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="year">Año</label>
                                <select class="form-control" id="y_date">
                                  <option>Seleccionar...</option>
                                  <?php 
                                    for ($i=0; $i < 20; $i++) { 
                                        echo '<option value="'.date('y')+$i.'">'.date('y')+$i.'</option>';
                                    }
                                   ?>
                                </select>
                              </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="numeroCartao">CVV</label>
                        <input type="text" class="form-control" id="cvv" placeholder="CVV">
                    </div>
                    <!--Aqui empieza la lista, juasjuas-->
                </form>


            </div>
            <div class="col-sm">
                <h4>03 RESUMEN DEL ENVIO</h4>
                

                <div class="total p-2">
                    <div class="item p-0">
                        <span>Subtotal</span>
                        <span>$<?php echo $_GET['Sub_T']; ?></span>
                    </div>
                    <div class="item">
                        <span>Cargos fijos</span>
                        <span>$<?php echo $_GET['fijos']; ?></span>
                    </div>
                    <div class="item">
                            <span>Total</span>
                                <span>
                                $<?php echo ($_GET['fijos']+$_GET['Sub_T']); ?>
                                </span>

                    </div>

                   <button type="button" onclick="verify_Payment()" class="btn btn-success btn-block btn-lg mt-5">Pagar</button>
                    <p>ATENCIÓN: Siempre verifique el tiempo de entrega.</p>
                </div>


            </div>
        </div>
    </div>















    <!--Bootstrap, JQuery and other things-->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
