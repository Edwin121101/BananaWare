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
                    <a href="IS.php" class="navegacion__enlace">Iniciar Sesión</a>
                </nav>
            </div>
        </div>


    </header>
    
    <main class="contenedorHis">
        <h4 class="centrar-texto">Historial de Paquetes</h4>
        <div class="curso">
            <div class="curso__imagen">
                <img src="views/img/sobre1.png" alt="Imagen del curso">
            </div>
            <div class="curso__informacion">
                <h4 class="no-margin">Sobre</h4>
                <p class="curso__label">Fecha: 
                    <span class="curso__info">martes, 7 de diciembre 2021 </span>
                </p>
                <p class="curso__label">Dirección de envío: 
                    <span class="curso__info">ESCOM, Av. Juan de Dios Bátiz</span>
                </p>
                <p class="curso__label">Destinatario: 
                    <span class="curso__info">Idalia Maldonado Castillo</span>
                </p>
                <p class="curso__descripcion">
                <a href="solicitar_devolucion.php" class="boton_user boton--primario">Solicitar Devolución</a>
                </p>
            </div> <!--.curso-informacion-->
        </div> <!--.curso -->

        <div class="curso">
            <div class="curso__imagen">
                <img src="views/img/chica.png" alt="Imagen del curso">
            </div>
            <div class="curso__informacion">
                <h4 class="no-margin">Paquete Chico</h4>
                <p class="curso__label">Fecha: 
                    <span class="curso__info">lunes, 6 de diciembre 2021 </span>
                </p>
                <p class="curso__label">Dirección de envío: 
                    <span class="curso__info">Ecatepec de Morelos, Edo. Mex</span>
                </p>
                <p class="curso__label">Destinatario: 
                    <span class="curso__info">Ariadna Rafael Acevedo</span>
                </p>
                <p class="curso__descripcion">
                <a href="#.php" class="boton_user boton--primario">Solicitar Devolución</a>
                </p>
            </div> <!--.curso-informacion-->
        </div> <!--.curso -->

        <div class="curso">
            <div class="curso__imagen">
                <img src="views/img/mediana.png" alt="Imagen del curso">
            </div>
            <div class="curso__informacion">
            <h4 class="no-margin">Paquete Mediano</h4>
                <p class="curso__label">Fecha: 
                    <span class="curso__info">viernes, 12 de noviembre 2021 </span>
                </p>
                <p class="curso__label">Dirección de envío: 
                    <span class="curso__info">Ecatepec de Morelos, Ciudad Azteca, Edo. Mex</span>
                </p>
                <p class="curso__label">Destinatario: 
                    <span class="curso__info">Edwin Ivan Villegas</span>
                </p>
                <p class="curso__descripcion">
                <a href="#.php" class="boton_user boton--primario">Solicitar Devolución</a>
                </p>
            </div> <!--.curso-informacion-->
        </div> <!--.curso -->

        <div class="curso">
            <div class="curso__imagen">
                <img src="views/img/grande.png" alt="Imagen del curso">
            </div>
            <div class="curso__informacion">
            <h4 class="no-margin">Paquete Grande</h4>
                <p class="curso__label">Fecha: 
                    <span class="curso__info">viernes, 15 de octubre 2021 </span>
                </p>
                <p class="curso__label">Dirección de envío: 
                    <span class="curso__info">G.A.M. Villa de Aragón</span>
                </p>
                <p class="curso__label">Destinatario: 
                    <span class="curso__info">Alan Alejo</span>
                </p>
                <p class="curso__descripcion">
                <a href="#.php" class="boton_user boton--primario">Solicitar Devolución</a>
                </p>
            </div> <!--.curso-informacion-->
        </div> <!--.curso -->

        
    </main>
    
  
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