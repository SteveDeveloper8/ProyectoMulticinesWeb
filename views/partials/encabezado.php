<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="http://localhost/ProyectoMulticinesWeb/assets/img/icono-pestana.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="keywords"
      content="cine,peliculas,movies,entretenimiento,actores,cartelera,estreno"
    />
    <meta
      name="author"
      content="Daniel Asanza,Bryan Martínez,Alfredo López,Giampaolo Delgado"
    />
    <meta
      name="description"
      content="Aplicacion de cine,proyecto segundo parcial, sexto semestre"
    />
    
    <link rel="stylesheet" href="http://localhost/ProyectoMulticinesWeb/assets/css/estilos.css" />
    <script src="http://localhost/ProyectoMulticinesWeb/assets/js/Quienes.js"></script>
    <script src="http://localhost/ProyectoMulticinesWeb/assets/js/Cartelera.js"></script>
    <script src="http://localhost/ProyectoMulticinesWeb/assets/js/codigo.js"></script>
    <script src="http://localhost/ProyectoMulticinesWeb/assets/js/comboUbicaciones.js"></script>
    <script src="http://localhost/ProyectoMulticinesWeb/assets/js/snack-bar.js"></script>
    <script src="http://localhost/ProyectoMulticinesWeb/assets/js/validaciones.js"></script>
    <script src="http://localhost/ProyectoMulticinesWeb/assets/js/validacionesTCN.js"></script>
    <script src="http://localhost/ProyectoMulticinesWeb/assets/js/ValidarFormulario.js"></script>
    <script
      src="https://kit.fontawesome.com/6faef096ec.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap"
      rel="stylesheet"
    />
    <title>Multicines</title>
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
          <a id="registro" href="http://localhost/ProyectoMulticinesWeb/views/estaticas/registrate.php">Registrate</a>
          <a id="inicioSesion" href="#">Iniciar Sesión</a>
        </div>
      </div>
      <div class="header-principal">
        <div class="logo">
          <a href="../homeView.php"><img src="http://localhost/ProyectoMulticinesWeb/assets/img/logo.png" alt="logo" /></a>
        </div>
        <nav class="navegacion">
          <ul>
            <li><a href="../homeView.php">Inicio</a></li>
            <!-- TODO: Asanza -->
            <li><a href="http://localhost/ProyectoMulticinesWeb/views/estaticas/Cartelera.php">Cartelera</a></li>
            <!-- TODO: Lopez -->
            <li><a href="http://localhost/ProyectoMulticinesWeb/views/estaticas/SnackBar.php">Snackbar</a></li>
            <!-- TODO: Asanza -->
            <li><a href="http://localhost/ProyectoMulticinesWeb/views/estaticas/promociones.php">Promociones</a></li>
            <!-- TODO: Martinez -->
            <li><a href="http://localhost/ProyectoMulticinesWeb/views/estaticas/QuienesSomos.php">Quienes somos</a></li>
            <!-- TODO: Lopez -->
            <li><a href="http://localhost/ProyectoMulticinesWeb/views/estaticas/contactenos.php">Contáctanos</a></li>
            <!-- TODO: Martinez -->
            <!-- TODO: Delgado Registro ** Trabaja con nosotros-->
          </ul>
        </nav>
      </div>
    </header>
