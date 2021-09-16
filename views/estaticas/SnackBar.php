<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="../img/icono-pestana.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="comida, palomitas, snacks, dulces, cine">
  <meta name="description" content="Sección para reservar snacks del cine.">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/snack-bar.css">
  <script src="../js/snack-bar.js" ></script>
  <script src="https://kit.fontawesome.com/6faef096ec.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <title>Snack Bar</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto Condensed', sans-serif;
      letter-spacing: 0.80px;
    }
  </style>
</head>

<body>
  <header>
  <div class="header-top">
    <div class="redes">
      <a href="#">
        <i id="facebook" class="fab fa-facebook-square"></i>
      </a>
      <a href="#">
        <i id="instagram" class="fab fa-instagram"></i>
      </a>
      <a href="#">
        <i id="twitter" class="fab fa-twitter"></i>
      </a>
    </div>
    <div class="header-Botones">
      <a id="registro" href="registrate.html">Registrate</a>
      <a id="inicioSesion" href="#">Iniciar Sesión</a>
    </div>
  </div>
  <div class="header-principal">
    <div class="logo">
      <a href="../index.html"><img src="../img/logo.png" alt="logo"></a>
    </div>
    <nav class="navegacion">
      <ul>
        <li><a href="../index.html">Inicio</a></li> <!-- TODO: Asanza -->
        <li><a href="Cartelera.html">Cartelera</a></li> <!-- TODO: Lopez -->
        <li><a href="SnackBar.html">Snackbar</a></li> <!-- TODO: Asanza -->
        <li><a href="promociones.html">Promociones</a></li> <!-- TODO: Martinez -->
        <li><a href="QuienesSomos.html">Quienes somos</a></li> <!-- TODO: Lopez -->
        <li><a href="contactenos.html">Contáctanos</a></li> <!-- TODO: Martinez -->
        <!-- TODO: Delgado Registro ** Trabaja con nosotros-->
      </ul>
    </nav>
  </div>
  </header>
    <div class="snack-bar">
      <div class="bar-menu">
        <div id="combos" onclick="cambiarSeccion(this);">
            Combos
        </div>
        <div id="bebidas" onclick="cambiarSeccion(this);">
            Bebidas
        </div>
        <div id="snacks" onclick="cambiarSeccion(this);">
            Snacks
        </div>
        <div id="salsas" onclick="cambiarSeccion(this);">
            Salsas
        </div>
        <div id="dulces" onclick="cambiarSeccion(this);">
            Dulces
        </div>
        <div id="promo" onclick="cambiarSeccion(this);">
            Promocionales
        </div>
      </div>
      <!--Combos-->
      <div id="primera-seccion" class="mostrador combos">
        <div>
            <img src="../img/combo1.jpg" alt="combo 1">
            <p>COMBO 1</p>
            <p><b>$7.99</b></p>
        </div>
        <div>
            <img src="../img/combo2.jpg" alt="combo 2">
            <p>COMBO 2</p>
            <p><b>$7.99</b></p>
        </div>
        <div>
            <img src="../img/combo3.jpg" alt="combo 3">
            <p>COMBO 3:HOT DOG NACHO QUESO</p>
            <p><b>$12.99</b></p>
        </div>
        <div>
            <img src="../img/combo3-chili.jpg" alt="combo 3">
            <p>COMBO 3:HOT DOG NACHO CHILI</p>
            <p><b>$12.99</b></p>
        </div>
      </div>
      <!--Bebidas-->
      <div class="mostrador bebidas">
        <div>
            <img src="../img/bebida-grande.jpg" alt="bebida grande">
            <p>BEBIDA GRANDE 44OZ</p>
            <p><b>$3.40</b></p>
        </div>
        <div>
            <img src="../img/bebida-hershey.jpg" alt="hot chocolate hersheys">
            <p>HOT CHOCOLATE HERSHEYS</p>
            <p><b>$1.80</b></p>
        </div>
        <div>
            <img src="../img/hersheysc&c.jpg" alt="hersheys cookies and cream">
            <p>HERSHEYS COOKIES AND CREAM</p>
            <p><b>$3.50</b></p>
        </div>
        <div>
            <img src="../img/agua.jpg" alt="agua">
            <p>AGUA SIN GAS</p>
            <p><b>$1.85</b></p>
        </div>
      </div>
      <!--Snacks-->
      <div class="mostrador snacks">
        <div>
            <img src="../img/canguil-grande.jpg" alt="cangul grande sal">
            <p>CANGUIL GRANDE SAL</p>
            <p><b>$3.35</b></p>
        </div>
        <div>
            <img src="../img/hot-dog.jpg" alt="hot dog">
            <p>HOT DOG</p>
            <p><b>$4.00</b></p>
        </div>
        <div>
            <img src="../img/nachos-queso.jpg" alt="nachos queso">
            <p>NACHOS QUESO</p>
            <p><b>$4.00</b></p>
        </div>
        <div>
            <img src="../img/nachos-chili.jpg" alt="nachos chili">
            <p>NACHOS CHILI</p>
            <p><b>$4.00</b></p>
        </div>
      </div>
      <!--Snacks-->
      <div class="mostrador salsas">
        <div>
            <img src="../img/salsa-queso.jpg" alt="salsa queso">
            <p>SALSA EXTRA QUESO</p>
            <p><b>$1.65</b></p>
        </div>
        <div>
            <img src="../img/salsa-chili.jpg" alt="hot dog">
            <p>SALSA EXTRA CHILI</p>
            <p><b>$1.65</b></p>
        </div>
      </div>
      <!--Dulces-->
      <div class="mostrador dulces">
        <div>
            <img src="../img/snickers.jpg" alt="snickers">
            <p>SNICKERS</p>
            <p><b>$2.50</b></p>
        </div>
        <div>
            <img src="../img/twix.jpg" alt="twix">
            <p>TWIX</p>
            <p><b>$2.50</b></p>
        </div>
        <div>
            <img src="../img/skittles.jpg" alt="skittles">
            <p>SKITTLES</p>
            <p><b>$2.50</b></p>
        </div>
        <div>
            <img src="../img/m&m.jpg" alt="m&m's">
            <p>M&M</p>
            <p><b>$2.50</b></p>
        </div>
      </div>
      <!--Promocionales-->
      <div class="mostrador promo">
        <div>
            <img src="../img/pok-black-widow.jpg" alt="pok black widow">
            <p>POK BLACK WIDOW</p>
            <p><b>$7.90</b></p>
        </div>
        <div>
            <img src="../img/pok-mujer-maravilla.jpg" alt="pok mujer maravilla">
            <p>POK MUJER MARAVILLA</p>
            <p><b>$4.99</b></p>
        </div>
        <div>
            <img src="../img/llavero-r&f.jpg" alt="llavero rapidos y furiosos">
            <p>LLAVERO RÁPIDOS Y FURIOSOS</p>
            <p><b>$5.00</b></p>
        </div>
        <div>
            <img src="../img/pok-onward.jpg" alt="pok onward">
            <p>POK ONWARD</p>
            <p><b>$4.99</b></p>
        </div>
      </div>
    </div>
  <footer>
    <div id="footer">
      <div class="tabla">
        <p><strong><span id="borde">Contáctanos</span></strong></p>

        <a href="contactenos.html">Escríbenos</a>
        <br>
        <a href="QuienesSomos.html">Quienes somos</a>
        <br>
        <a href="TrabajaConNosotros.html">Trabaja con nosotros</a>
        <br>
        <a href="#">Donde estámos</a>
      </div>
      <div class="tabla">
        <p><strong><span class="borde">Servicio Coorporativo</span></strong></p>

        <a href="#">Publicidad</a>
        <br>
        <a href="#">Cupones</a>
        <br>
        <a href="#">Cumpleaños</a>
      </div>
      <div class="tabla">
        <p><strong><span class="borde">Redes sociales</span></strong></p>
        <div class="red fb">
          <img src="../ico/facebook.ico" style="width:18px; height:18px;" alt="icono">
          <a href="#">Facebook</a>
        </div>
        <div class="red">
          <img src="../ico/twitter.ico" style="width:22px; height:22px;" alt="icono">
          <a href="#">Twitter</a>
        </div>
        <div class="red">
          <img src="../ico/youtube.ico" style="width:22px; height:22px;" alt="icono">
          <a href="#">Youtube</a>
        </div>
        <div class="red">
          <img src="../ico/instagram.ico" style="width:24px; height:24px;" alt="icono">
          <a href="#">Instagram</a>
        </div>
      </div>
      <div class="tabla">
        <div class="call-center">
          <p><span class="borde">Call Center</span></p>
          <p>1-800-691060</p>
          <p>Horario</p>
          <p>10h00 - 21h00</p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>
