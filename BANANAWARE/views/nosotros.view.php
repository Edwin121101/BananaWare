<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrontEnd Store</title>
    <link rel="stylesheet" href="views/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="views/css/style1.css">
</head>
<body>
    <header class="header">
        <a href="index.php">
            <img class="header__logo" src="views/img/logobw3.png" alt="Logotipo">
        </a>
    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace" href="index.php">Inicio</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="nosotros.php">Nosotros</a>
    </nav>

    <main class="contenedor">
        <h1>Nosotros</h1>
        <div class="nosotros">
            <div class="nosotros__contenido">
                <p>
                    BananaWare es una empresa mexicana que ofrecer servicio de puerta a puerta en el país. Cuentan con 
                    servicios de mensajería y paquetería, importación y exportación con cobertura a nivel nacional. Ofrece envíos el mismo 
                    día, y horas después de haberlo comprado en la misma ciudad. Rastreo en tiempo real.Notificaciones a los clientes
                    vía correo electronico. Además puedes asegurar paquetes.
                </p>

                <p>  
                    Tiene la función de mantener comunicada a la población ofreciendo servicios de correspondencia, mensajería y 
                    paquetería accesibles, confiables y de calidad, con la misión de ser factor de inclusión de la población, 
                    facilitador de la actividad económica y garante de las comunicaciones interpersonales. 
                </p>
            </div>
            <img class="nosotros__imagen" src="views/img/BWlogo.png" alt="imagen nosotros">
        </div>

    </main>

    <section class="contenedor comprar">
        <h2 class="comprar__titulo">¿Por qué comprar con nosotros?</h2>

        <div class="bloques">
            <div class="bloque">
                <img class="bloque__imagen" src="views/img/icono_1.png" alt="porque comprar">
                <h3 class="bloque__titulo">El Mejor Precio</h3>
                <p>Nuestros precios son muy accesibles tomando en cuenta largas distancias, enviando solo tu paquete y no tu dinero</p>
            </div> <!--.bloque-->
            
            <div class="bloque">
                <img class="bloque__imagen" src="views/img/icono_2.png" alt="porque comprar">
                <h3 class="bloque__titulo">Para Devs</h3>
                <p>Contamos con servicio privado para negocios, unete a nuestro equipo</p>
            </div> <!--.bloque-->

            <div class="bloque">
                <img class="bloque__imagen" src="views/img/icono_3.png" alt="porque comprar">
                <h3 class="bloque__titulo">Envío Rapido</h3>
                <p>Realizamos envios urgentes para el mismo dia.</p>
            </div> <!--.bloque-->

            <div class="bloque">
                <img class="bloque__imagen" src="views/img/icono_4.png" alt="porque comprar">
                <h3 class="bloque__titulo">La mejor calidad</h3>
                <p>Tu paquete viaja asegurado y en las mejores condiciones para que llegue presentable a su destino.</p>
            </div> <!--.bloque-->
            
        </div> <!--.bloques-->
    </section>

    <footer class="footer">
        <p class="footer__texto">Equipo BananaWare </p>
    </footer>
</body>
</html>