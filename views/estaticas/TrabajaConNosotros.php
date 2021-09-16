<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="../img/icono-pestana.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="trabajo, empleados, inscripción">
  <meta name="description" content="Sección para registro de aspirantes a empleado.">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/trabajaConNosotros.css">
  <script src="../js/snack-bar.js"></script>
  <script  src="../js/provincias.js"></script>
  <script src="../js/comboUbicaciones.js"></script>
  <script src="../js/validacionTCN.js"></script>
  <script src="https://kit.fontawesome.com/6faef096ec.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <title>Trabaja con nosotros</title>
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
    .formularios{
        margin-top: 200px;
        margin-bottom: 50px;
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
  
  <div class="formularios">
    <!-- onsubmit=return validar() PERMITE LLAMAR A LA FUNCION DE JAVASCRIPT QUE VALIDA EL FORMULARIO-->
    <form id="formulario" name="formulario" onsubmit="return validar();">
      <h1>Registro de aspirante</h1>
      <div class="body-formulario">
        <div id="titulo">
          <h3>Datos personales</h3>
        </div>
        <div id="campos">
            <div class="row">
              <div class="row-col">
                <label for="nombres">Nombres:</label>
                <br>
                <input type="text" name="nombres" id="nombres"/>
              </div>
              <div class="row-col">
                <label for="apellidos">Apellidos:</label>
                <br>
                <input type="text" name="apellidos" id="apellidos"/>
              </div>
            </div>
            <div class="row">
              <div class="row-col">
                <label for="correo">Correo:</label>
                <br>
                <input type="text" name="correo" id="correo"/>
              </div>
              <div class="row-col">
                <label for="telefono">Telefono:</label>
                <br>
                <input type="text" name="telefono" id="telefono"/>
              </div>
            </div>
            <div class="row">
              <div class="row-col radio">
                <label>Genero:</label>
                <br>
                <input id="fem" type="radio" name="genero" value="F"/>Femenino
                <input id="mas" type="radio" name="genero" value="M"/>Masculino
                <input id="otro" type="radio" name="genero" value="O"/>Otro
              </div>
              <div class="row-col">
                <label for="provincia">Provincia de residencia:</label>
                <br>
                <select name="provincias" id="provincia" class="formItem" onFocus="llenarComboProvincias(this);">
                    <option value="0">Seleccione..</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="row-col">
                <label for="fecha">Fecha de Nacimiento:</label>
                <br>
                <input type="date" name="fecha" id="fecha" class="formItem"/>
              </div>
              <div class="row-col">
                <label for="ciudad">Ciudad de residencia:</label>
                <br>
                <select name="ciudades" id="ciudad" class="formItem" onFocus="llenarComboCiudades(this);">
                    <option value="0">Seleccione..</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="row-col">
                <label for="contrasegna">Contraseña:</label>
                <br>
                <input id="contrasegna" type="password" name="contrasegna"/>
              </div>
              <div class="row-col">
                <label for="confContrasegna">Confirmar contraseña:</label>
                <br>
                <input id="confContrasegna" type="password" name="confContrasegna"/>
              </div>
            </div>
            <div class="row">
              <div class="row-col">
                <input type="submit" class="boton" value="Registrar">
              </div>
              <div class="row-col">
                <input type="reset" class="boton" value="Limpiar" onclick="limpiarMensajes();">
              </div>
            </div>
        </div>
      </div>
    </form>

</div>
  <footer>
    <div id="footer">
      <div class="tabla">
        <p><strong><span class="borde">Contáctanos</span></strong></p>

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
