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
    <!--Dudas
        Enviaremos comentarios del porque se hizo la devolucion?
        Se agregara el metodo de la devolucion del dinero?
        La devolucion es cuando ya te llego o cuando esta en camino?    
    -->
    
    <main class="contenedorHis">
        <h4 class="centrar-texto">Sobre</h4><!--Se muestra nombre del paquete que se seleccionó-->
        <div class="curso">
            <div class="curso__imagen">
                <img src="views/img/sobre1.png" alt="Imagen del curso"><!--Imagen del paquete seleccionado-->
            </div>
            <div class="curso__informacion">
                
                <p class="curso__label">Fecha: <!--Datos del paquete-->
                    <span class="curso__info">martes, 7 de diciembre 2021 </span>
                </p>
                <p class="curso__label">Dirección de envío: 
                    <span class="curso__info">ESCOM, Av. Juan de Dios Bátiz</span>
                </p>
                <p class="curso__label">Destinatario: 
                    <span class="curso__info">Idalia Maldonado Castillo</span>
                </p>
                <h4 class="">Se solicitara la devolucion</h4><!--Confirmacion de la devolucion del paquete-->
                <div class="grid" >
                <p class="curso__descripcion two">
                    <a href="#.php" onclick="alerta()" class="boton_user boton--primario">&nbspAceptar&nbsp&nbsp</a>
                    </p>
                <p class="curso__descripcion three">
                    <a href="#.php" onclick="alerta2()" class="boton_user boton--primario">Cancelar</a>
                </p>
            </div>
            </div>
        </div> 

        
      

       

        
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

<script>
    function alerta() {
            alert("MCON1");
            window.location.href = "historial_paquetes.php";
    }
    function alerta2() {
        var opcion = confirm("¿Está seguro de que no quieres continuar?");
        if (opcion == true) {
            window.location.href = "index.php";
        } 
    }
</script>

</html>