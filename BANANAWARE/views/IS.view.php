<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BananaWare</title>
    <meta name="description" content="Página web de blog de café">

    <link rel="stylesheet" href="views/css/normalize.css">
    <link rel="stylesheet" href="views/css/style.css">
    <script type="text/javascript" src="views/js/funciones.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                    <a href="IS.php" class="navegacion__enlace">Iniciar Sesión</a>
                </nav>
            </div>
        </div>
    </header>
    <section class="form-login">
      <h5> Iniciar Sesión </h5>
      <input class="controls" type="text" name="Usuario" value="" placeholder="Correo Electrónico" id="email">
      <input class="controls" type="password" name="Contrasena" value="" placeholder="Contraseña" id="pass">
      <button onclick="iniciar_Ses()" class="boton--secundario boton--primario1">Iniciar Sesión</button>
      <p><a class="form-login__enlace" href="olvidar_c_email.php">¿Olvidaste tu Contraseña?</a></p>
    </section>



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
</body>

</html>


