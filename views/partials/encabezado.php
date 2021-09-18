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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
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
          <a id="registro" href="http://localhost/ProyectoMulticinesWeb/index.php?c=index&p=registrate&a=estaticas">Registrate</a>
          <a id="inicioSesion" href="http://localhost/ProyectoMulticinesWeb/index.php?c=sesion&a=entrar">Iniciar Sesión</a>
        </div>
      </div>
      <div class="header-principal">
        <div class="logo">
          <a href="http://localhost/ProyectoMulticinesWeb/views/estaticas/homeView.php"><img src="http://localhost/ProyectoMulticinesWeb/assets/img/logo.png" alt="logo" /></a>
        </div>
        <nav class="navegacion">
          <ul>
            <li><a href="http://localhost/ProyectoMulticinesWeb/views/homeView.php">Inicio</a></li>
            <!-- TODO: Asanza -->
            <li><a href="http://localhost/ProyectoMulticinesWeb/index.php?c=index&p=Cartelera&a=estaticas">Cartelera</a></li>
            <!-- TODO: Lopez -->
            <li><a href="http://localhost/ProyectoMulticinesWeb/index.php?c=index&p=Snackbar&a=estaticas">Snackbar</a></li>
            <!-- TODO: Asanza -->
            <li><a href="http://localhost/ProyectoMulticinesWeb/index.php?c=index&p=promociones&a=estaticas">Promociones</a></li>
            <!-- TODO: Martinez -->
            <li><a href="http://localhost/ProyectoMulticinesWeb/index.php?c=index&p=QuienesSomos&a=estaticas">Quienes somos</a></li>
            <!-- TODO: Lopez -->
            <li><a href="http://localhost/ProyectoMulticinesWeb/index.php?c=index&p=contactenos&a=estaticas">Contáctanos</a></li>
            <li><a href="http://localhost/ProyectoMulticinesWeb/index.php?c=pelicula&a=index">Lista Peliculas</a></li>
            <li><a href="http://localhost/ProyectoMulticinesWeb/index.php?c=pelicula&a=nuevo">Agregar Peliculas</a></li>
            <li><a href="http://localhost/ProyectoMulticinesWeb/index.php?c=pelicula&a=index">Editar Peliculas</a></li> -->           <!-- TODO: Martinez -->
            <li><a href="http://localhost/ProyectoMulticinesWeb/index.php?c=snack&a=index">Lista Producto</a></li>
            <li><a href="http://localhost/ProyectoMulticinesWeb/index.php?c=snack&a=nuevo">Agregar Producto</a></li>
            <li><a href="http://localhost/ProyectoMulticinesWeb/index.php?c=snack&a=index">Editar Producto</a></li>  -->
            <!-- TODO: Delgado Registro ** Trabaja con nosotros-->
          </ul>
        </nav>
      </div>
    </header>
