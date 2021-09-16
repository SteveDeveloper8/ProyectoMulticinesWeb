<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="../img/icono-pestana.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="cine,peliculas,movies,entretenimiento,actores,cartelera,estreno" />
  <meta name="author" content="Daniel Asanza,Bryan Martínez,Alfredo López,Giampaolo Delgado" />
  <meta name="description" content="Aplicacion de cine,proyecto primer parcial, sexto semestre" />
  <link rel="stylesheet" href="../css/estilosMartinez.css" />
  <script src="https://kit.fontawesome.com/6faef096ec.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet" />
  <title>Multicines-Promociones</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Roboto Condensed", sans-serif;
      letter-spacing: 0.8px;
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
        <a href="../index.html"><img src="../img/logo.png" alt="logo" /></a>
      </div>
      <nav class="navegacion">
        <ul>
          <li><a href="../index.html">Inicio</a></li>
          <!-- TODO: Asanza -->
          <li><a href="Cartelera.html">Cartelera</a></li>
          <!-- TODO: Lopez -->
          <li><a href="SnackBar.html">Snackbar</a></li>
          <!-- TODO: Asanza -->
          <li><a href="promociones.html">Promociones</a></li>
          <!-- TODO: Martinez -->
          <li><a href="QuienesSomos.html">Quienes somos</a></li>
          <!-- TODO: Lopez -->
          <li><a href="contactenos.html">Contáctanos</a></li>
          <!-- TODO: Martinez -->
          <!-- TODO: Delgado Registro ** Trabaja con nosotros-->
        </ul>
      </nav>
    </div>
  </header>
  <div class="cabecera">
    <h1>PROMOCIONES</h1>
    <p>INICIO-PROMOCIONES</p>
  </div>

  <div class="container-promociones">
    <div class="titulo">
      <h2>DISFRUTE DE NUESTRAS PROMOCIONES</h2>
    </div>
    <div class="informacion">
      <div>
        <h3>BENEFICIOS MULTICLUB</h3>
      </div>
      <div class="imagen-cuadro">
        <img src="../img/beneficios-multiclub.jpg" alt="Beneficios Multiclub" />
      </div>
      <p>Con tu membresía Multiclub disfruta de tus beneficios</p>
      <a class="enlace-boton" href="#">VER MÁS</a>
    </div>
    <div class="informacion">
      <div>
        <h3>SALAS PRIVADAS</h3>
      </div>
      <div class="imagen-cuadro">
        <img src="../img/combo-black-widow.jpg" alt="Combo Black Widow" />
      </div>
      <p>¡No te quedes sin el complemento ideal para acompañar tu peli!</p>
      <a class="enlace-boton" href="#">VER MÁS</a>
    </div>
    <div class="informacion">
      <div>
        <h3>SALAS PRIVADAS</h3>
      </div>
      <div class="imagen-cuadro">
        <img src="../img/salas-privadas.jpg" alt="Salas Privadas" />
      </div>
      <p>Disfrútalo con tu familia y amigos.</p>
      <a class="enlace-boton" href="#">VER MÁS</a>
    </div>
    <div class="informacion">
      <div>
        <h3>VERMOUTH</h3>
      </div>
      <div class="imagen-cuadro">
        <img src="../img/vermouth.jpg" alt="Vermouth" />
      </div>
      <p>Boletos desde $3 dólares</p>
      <a class="enlace-boton" href="#">VER MÁS</a>
    </div>
    <div class="informacion">
      <div>
        <h3>ÍTEM RÁPIDOS Y FURIOSOS</h3>
      </div>
      <div class="imagen-cuadro">
        <img src="../img/rapidos-furioso.jpg" alt="Rapidos y Furiosos" />
      </div>
      <p>¡Acelera motores y no te quedes sin tu ítem conmemorativo!</p>
      <a class="enlace-boton" href="#">VER MÁS</a>
    </div>
  </div>

  <footer>
    <div id="footer">
      <div class="tabla">
        <p>
          <strong><span class="borde">Contáctanos</span></strong>
        </p>

        <a href="contactenos.html">Escríbenos</a>
        <br />
        <a href="QuienesSomos.html">Quienes somos</a>
        <br />
        <a href="TrabajaConNosotros.html">Trabaja con nosotros</a>
        <br />
        <a href="#">Donde estámos</a>
      </div>
      <div class="tabla">
        <p>
          <strong><span class="borde">Servicio Coorporativo</span></strong>
        </p>

        <a href="#">Publicidad</a>
        <br />
        <a href="#">Cupones</a>
        <br />
        <a href="#">Cumpleaños</a>
      </div>
      <div class="tabla">
        <p>
          <strong><span class="borde">Redes sociales</span></strong>
        </p>
        <div class="red fb">
          <img src="../ico/facebook.ico" style="width: 18px; height: 18px" alt="icono" />
          <a href="#">Facebook</a>
        </div>
        <div class="red">
          <img src="../ico/twitter.ico" style="width: 22px; height: 22px" alt="icono" />
          <a href="#">Twitter</a>
        </div>
        <div class="red">
          <img src="../ico/youtube.ico" style="width: 22px; height: 22px" alt="icono" />
          <a href="#">Youtube</a>
        </div>
        <div class="red">
          <img src="../ico/instagram.ico" style="width: 24px; height: 24px" alt="icono" />
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