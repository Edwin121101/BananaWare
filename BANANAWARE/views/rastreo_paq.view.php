<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BananaWare</title>
    <meta name="description" content="Página web de blog de café">

    <link rel="stylesheet" href="views/css/normalize.css">
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
                    <a href="sucursal.php" class="navegacion__enlace">Centros de Recoleccion</a>
                    <a href="herramientas.php" class="navegacion__enlace">Cotización</a>
                    <a href="IS.php" class="navegacion__enlace">Iniciar Sesión</a>
                </nav>
            </div>
        </div>
    </header>
    <main class="contenedor sombra">
        <h2>Rastrea tu paquete:</h2>
        <div class="servicios">
            <?php 
            if (isset($error)) {
              echo '<script type="text/javascript">
            alert("El paquete que está intentando rastrear no existe");
            window.location.href="index.php";
          </script>';
            }
             ?>
            <section class="servicio">
                <h3>BananaWare</h3>
                <div class="iconos" <?php if(!$salida) echo 'style="opacity: 0.5"'?>>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <polyline points="5 12 3 12 12 3 21 12 19 12" />
                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                      </svg>
                </div>
                <p>Su paquete esta siendo preparado para su salida.</p>
            </section>

            <section class="servicio">
                <h3>En camino</h3>
                <div class="iconos" <?php if(!$camino) echo 'style="opacity: 0.5"'?>>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-truck-delivery" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="7" cy="17" r="2" />
                        <circle cx="17" cy="17" r="2" />
                        <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                        <line x1="3" y1="9" x2="7" y2="9" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-caret-right" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M18 15l-6 -6l-6 6h12" transform="rotate(90 12 12)" />
                    </svg>
                </div>
                <p>El paquete se dirige hacía su destino.</p>
            </section>

            <section class="servicio">
                <h3>Entregado</h3>
                <div class="iconos" <?php if(!$entregado) echo 'style="opacity: 0.5"'?>>
                   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="12" cy="12" r="9" />
                    <path d="M9 12l2 2l4 -4" />
                </svg>
                </div>
                <p>Su paquete se ha entregado</p>
            </section>
        </div> <!--Este es el cierre de la clase de servicios-->
    </main>

    <footer class="footer">
      <div class="contenedor">
          <div class="barra">
              <a class="logo" href="index.php">
                  <h1 class="logo__nombre no-margin centrar-texto">Banana<span class="logo__bold">Ware</span></h1>
              </a>

              <nav class="navegacion">
                  <a href="soporte.php" class="navegacion__enlace">Soporte</a>
                  <a href="rastreo.php" class="navegacion__enlace">Rastreo</a>
                  <a href="herramientas.php" class="navegacion__enlace">Cotización</a>
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
</body>

</html>