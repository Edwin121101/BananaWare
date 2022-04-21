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
                    <!-- <a href="herramientas.php" class="navegacion__enlace">Cotización</a> -->
                    <a href="cuenta_user.php" class="navegacion__enlace">Cuenta</a>

                </nav>
            </div>
        </div>


    </header>
    <br>


    <main class="contenedor  fondox borde">
        <h4>Acciones de cuenta</h4>

        <article class="entrada">

            <div class=" grid">

                <a href="mod_datos.php" class="boton_user boton--primario one borde">Modificar datos</a>
                <br>
                <a href="borrar_cuenta.php" class="boton_user boton--primario five borde">Borrar cuenta</a>
                <br>
                <a href="verdatos_cuenta.php" class="boton_user boton--primario nine borde">Ver datos de cuenta</a>
                <br>
                <a href="historial_paquetes.php" class="boton_user boton--primario thirteen borde">historial de paquetes</a>
                <br>
            </div>
        </article>

    </main>
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
                    <!-- <a href="herramientas.php" class="navegacion__enlace">Cotización</a> -->
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