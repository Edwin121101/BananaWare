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
                    <a href="rastreo.php" class="navegacion__enlace">Rastreo</a>
                    <a href="herramientas.php" class="navegacion__enlace">Cotización</a>
                    <a href="IS.php" class="navegacion__enlace">Iniciar Sesión</a>
                </nav>
            </div>
        </div>


    </header>

    <div class="contenedor contenido-principal">
        <main class="blog">
            <h4>Para recuperar tu contraseña...</h4>

            <article class="entrada">

                <div class="entrada__contenido">

                    <p>
                        De click en el enlace que se ha enviado a su correo electronico, por favor.
                    </p>
                    <p>
                        Si no te ha llegado el correo electronico reenvia el correo para recuperar tu contraseña.
                    </p>
                    <br>
                    <a href="#" onclick="alert('E-MAIL1: Se ha reenviado el Correo recuperación de contraseña.')" class="boton boton--primario">Reenviar Correo</a>
                </div>
            </article>
        </main>
    </div>

    <br>
    <br>
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