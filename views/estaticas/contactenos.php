<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="../img/icono-pestana.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="cine,peliculas,movies,entretenimiento,actores,cartelera,estreno">
  <meta name="author" content="Daniel Asanza,Bryan Martínez,Alfredo López,Giampaolo Delgado">
  <meta name="description" content="Aplicacion de cine,proyecto primer parcial, sexto semestre">
  <link rel="stylesheet" href="../css/estilosMartinez.css">
  <script src="https://kit.fontawesome.com/6faef096ec.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <script src="../js/validaciones.js"> </script>
  <title>Multicines-Contáctanos</title>
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

<body id="form-contactanos">
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
  <div class="cabecera">
    <h1>CONTÁCTANOS</h1>
    <p>INICIO-CONTÁCTANOS</p>
  </div>

  <div class="container-contactanos">
    <div class="texto-descripcion">
      <p>Con la finalidad de ahorrarle tiempo y agilitar la entrega de la información
        que usted requiere, antes de enviarnos una consulta por este medio, por favor
        haga click en la pestaña de Preguntas Frecuentes Es posible que su consulta
        conste en dicho listado y usted de esa manera recibirá retroalimentación inmediata.
      </p>
    </div>
    <div class="informacion-imagen">
      <div class="imagen-cuadro">
        <img src="../img/multicines_contacto.jpg" alt="Contactenos Multicine">
      </div>
    </div>
    <div class="formularios">
      <form id="formContacto" onsubmit="return validar()">
        <div class="row">
          <div class="col-md-6">
            <label for="nombres">Nombres: </label>
            <input type="text" name="nombres" id="nombres" class="formItem">
          </div>
          <div class="col-md-6">
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" class="formItem">

          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="cedula">Numero de cedula:</label>
            <input type="text" name="cedula" id="cedula" class="formItem">
          </div>
          <div class="col-md-6">
            <label for="tarjeta">Tarjeta Multicines:</label>
            <input type="text" name="tarjeta" id="tarjeta" class="formItem">

          </div>

        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="mail">Mail:</label>
            <input type="email" name="mail" id="mail" class="formItem">

          </div>
          <div class="col-md-6">
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" id="telefono" class="formItem">

          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="cboComplejo">Complejo:</label>
            <select name="cboComplejo" id="cboComplejo" class="formItem">
              <option value="0">SELECCIONE..</option>
              <option value="1">BATAN</option>
              <option value="2">MALL DEL RIO</option>
              <option value="3">MILENIUM PLAZA</option>
              <option value="4">MALL DEL RIO GYE</option>
              <option value="5">AUTOCINECCI</option>
              <option value="6">AUTOCINECONDADO</option>
              <option value="7">AUTOCINE EL POTRERO</option>
              <option value="8">C.C.I</option>
              <option value="9">CONDADO</option>
              <option value="10">RECREO</option>
              <option value="11">SCALA</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="cboConsulta">Tipo de Consulta:</label>
            <select name="cboConsulta" id="cboConsulta" class="formItem">
              <option value="0">SELECCIONE..</option>
              <option value="1">CARTELERA</option>
              <option value="2">COMPRA</option>
              <option value="3">BOLETERÍA</option>
              <option value="4">DULCERÍA</option>
              <option value="5">REGISTRO ONLINE</option>
              <option value="6">PROMOCIONES</option>
              <option value="7">TARJETA MULTICINES</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="pelicula">Pelicula o Función</label>
            <input type="text" name="pelicula" id="pelicula" class="formItem">
          </div>
          <div class="col-md-6">
            <label for="fecha">Fecha de la Visita</label>
            <input type="date" name="fecha" id="fecha" class="formItem">

          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="texto">Comentarios</label><br>
            <textarea name="comentario" id="texto" rows="8" cols="95" class="form-control"></textarea>
          </div>

        </div>

        <div class="col-md-12 text-center">
          <input type="submit" class="btn btn-primary" value="Enviar Comentarios">
        </div>

      </form>
    </div>
    <div class="informacion-extra">
      <p>Adicionalmente <br>
        Si desea enviar una sugerencia o comentario general por email directo: <br>
        sugerencias@multicines.com.ec <br>
        Teléfonos Oficina Matriz solo horas laborales: <br>
        (593-2)6050683
      </p>
    </div>
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