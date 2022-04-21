<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BananaWare</title>
    <meta name="description" content="Página web de blog de café">

    <link rel="stylesheet" href="views/css/normalize.css">
    
    <script type="text/javascript" src="views/js/funciones.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Correo Enviar</title>
</head>

<body class="corbody">
  <div role="article" aria-roledescription="email" lang="en" class="div1">
    <table class="tablec" role="presentation">
      <tr>
        <td class="td1" align="center";>
          <!--[if mso]>
          <table role="presentation" align="center" style="width:600px;">
          <tr>
          <td>
          <![endif]-->
          <table class="table2" role="presentation">
            <tr>
              <td class="td2">
                <a class="link1" href="#">
                    <img src="views/img/logobw3.png" width="165" alt="Logo" class="img1">
                </a>
              </td>
            </tr>
            <tr>
              <td class="td3">
                <h1 class="h1_1">Hola Banana...</h1>
                <p class="p1_1">
                  Upsss... 
                  <br>
                  Olvidaste tu contraseña, no te preocupes, BananaWare te la va a recuperar.
                </p>
              </td>
            </tr>
            <tr>
              <td class="td4">
                    <a href="#" class="link1">
                        <img src="views/img/sucursal3.jpg" width="600" alt="" class="img2">
                    </a>
              </td>
            </tr>
            <tr>
              <td class="td5">
                <!--[if mso]>
                <table role="presentation" width="100%">
                <tr>
                <td style="width:145px;" align="left" valign="top">
                <![endif]-->
                <div class="col-sml div2">
                  <img src="views/img/repartidor1.png" width="115" alt="" class="img3">
                </div>
                <!--[if mso]>
                </td>
                <td style="width:395px;padding-bottom:20px;" valign="top">
                <![endif]-->
                <div class="col-lge div3">
                  <p class="p1_2">Para recuperar tu contraseña da click en el siguiente enlace.</p>
                  <!-- <p class="p1_3">Nam non ante risus. Vestibulum vitae eleifend nisl, quis vehicula justo. Integer viverra efficitur pharetra. Nullam eget erat nibh.</p> -->
                  <p class="p1_1">
                    <a href="localhost/bananaware/olvidar_c_nueva.php" class="link3">
                        <!--[if mso]><i style="letter-spacing: 25px;mso-font-width:-100%;mso-text-raise:20pt">&nbsp;</i><![endif]-->
                        <span class="spanc">RECUPERAR</span><!--[if mso]><i style="letter-spacing: 25px;mso-font-width:-100%">&nbsp;</i><![endif]-->
                    </a>
                  </p>
                </div>
                <!--[if mso]>
                </td>
                </tr>
                </table>
                <![endif]-->
              </td>
            </tr>
            <tr>
              <td class="td6">
                <p class="p1_4">&reg; Todos los derechos reservados</p>
              </td>
            </tr>
          </table>
          <!--[if mso]>
          </td>
          </tr>
          </table>
          <![endif]-->
        </td>
      </tr>
    </table>
  </div>
  <style type="text/css">
    :root {
    --fuenteHeading: "PT Sans", sans-serif;
    --fuenteParrafos: "Open Sans", sans-serif;

    --primario: #F7DC6F;
    --gris: #e1e1e1;
    --blanco: #ffffff;
    --negro: #000000;
    /*--verdeO: #a9c761;*/
    /*--verdeO: #184c77;*/
    /*--verdeO: #234875;*/
    --Amarillo:#F7DC6F;
    /*--primariobox: #e23939;*/
    --primariobox: #F1E92D;
  --gris-claro: #B8B8B8;
  --sombra: 0 0 13px 0 rgba(201, 15, 15, 0.25);
}
html {
    box-sizing: border-box;
    font-size: 62.5%; /* 1 rem = 10px */
    background-color: var(--blanco);
}
*, *:before, *:after {
    box-sizing: inherit;
}
body {
    font-family: var(--fuenteParrafos);
    font-size: 1.6rem;
    line-height: 2;
}

/*CONTRASEÑA ENVIAR A CORREO*/
table, td, div, h1, p {
    font-family: Arial, sans-serif;
  }
  @media screen and (max-width: 530px) {
    .unsub {
      display: block;
      padding: 8px;
      margin-top: 14px;
      border-radius: 6px;
      background-color: #555555;
      text-decoration: none !important;
      font-weight: bold;
    }
    .col-lge {
      max-width: 100% !important;
    }
  }
  
  @media screen and (min-width: 531px) {
    .col-sml {
      max-width: 27% !important;
    }
    .col-lge {
      max-width: 73% !important;
    }
  }
  
  .corbody {
    /*background-image: url(../img/blacklogo.jpg);*/
    margin:0;
    padding:0;
    word-spacing:normal;
    background-color:var(--negro);
  }
  
  .tablec {
    width:100%;
    border:none;
    border-spacing:0;
  }
  .table2 {
    width:94%;
    max-width:600px;
    border:none;
    border-spacing:0;
    text-align:left;
    font-family:Arial,sans-serif;
    font-size:16px;
    line-height:22px;
    color:black;
  }
  
  .td1 {
    padding:0;
  }
  .td2 {
    padding:40px 30px 30px 30px;
    text-align:center;
    font-size:24px;
    font-weight:bold;
  }
  .td3 {
    padding:30px;
    background-color:#ffffff;
  }
  .td4 {
    padding:0;
    font-size:24px;
    line-height:28px;
    font-weight:bold;
  }
  .td5 {
    padding:35px 30px 11px 30px;
    font-size:0;
    background-color:#ffffff;
    border-bottom:1px solid #f0f0f5;
    border-color:var(--negro);
  }
  .td6 {
    padding:30px;
    text-align:center;
    font-size:12px;
    background-color:var(--primario);
    color:var(--negro);
  }
  
  .link1 {
    text-decoration:none;
  }
  .link2 {
    color:#e50d70;
    text-decoration:underline;
  }
  .link3 {
    background: var(--negro); 
    text-decoration: none; 
    padding: 10px 25px; 
    color: #ffffff; 
    border-radius: 4px; 
    display:inline-block; 
    padding-block-start:0;
    text-decoration-color:var(--blanco);
    justify-content: center;
  }
  
  .spanc {
    -ms-text-autospace:10pt;
    font-weight:bold;
    text-align: center;
  }
  
  .img1 {
    width:165px;
    max-width:80%;
    height:auto;
    border:none;
    text-decoration:none;
    color:#ffffff;
  }
  .img2 {
    width:100%;
    height:auto;
    display:block;
    border:none;
    text-decoration:none;
    color:black;
  }
  .img3 {
    width:115px;
    max-width:80%;
    margin-bottom:20px;
  }
  
  .h1_1 {
    margin-top:0;
    margin-bottom:16px;
    font-size:26px;
    line-height:32px;
    font-weight:bold;
    letter-spacing:-0.02em;
  }
  .p1_1 {
    margin:0;
  }
  .p1_2 {
    margin-top:0;
    margin-bottom:12px;
  }
  .p1_3 {
    margin-top:0;
    margin-bottom:18px;
  }
  .p1_4 {
    margin:0;
    font-size:14px;
    line-height:20px;
  }
  
  .div1 {
    text-size-adjust:100%;
    -webkit-text-size-adjust:100%;
    -ms-text-size-adjust:100%;
    background-color:var(--negro);
  }
  .div2 {
    display:inline-block;
    width:100%;
    max-width:145px;
    vertical-align:top;
    text-align:left;
    font-family:Arial,sans-serif;
    font-size:14px;
    color:#363636;
  }
  .div3 {
    display:inline-block;
    width:100%;
    max-width:395px;
    vertical-align:top;
    padding-bottom:20px;
    font-family:Arial,sans-serif;
    font-size:16px;
    line-height:22px;
    color:var(--negro);
  }
  </style>
  <script src="views/js/modernizr.js"></script>
</body>
</html>