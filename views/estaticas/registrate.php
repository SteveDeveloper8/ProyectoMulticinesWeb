<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="../img/icono-pestana.png" />
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
      content="Aplicacion de cine,proyecto primer parcial, sexto semestre"
    />
    <link rel="stylesheet" href="../css/estilos.css" />
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

  <body id="form">
    <header>
      <div class="header-principal">
        <div class="logo">
          <a href="../index.html"><img src="../img/logo.png" alt="logo" /></a>
        </div>
        <nav class="navegacion">
          <ul>
            <li><a href="../index.html">Inicio</a></li>
            <li><a href="Cartelera.html">Cartelera</a></li>
            <li><a href="SnackBar.html">Snackbar</a></li>
            <li><a href="promociones.html">Promociones</a></li>
            <li><a href="QuienesSomos.html">Quienes somos</a></li>
            <li><a href="contactenos.html">Contáctanos</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="formulario">
      <h1>Registro de usuario</h1>
      <form onsubmit="return validar()" class="body-formulario">
        <div id="titulo">
          <h3>Datos Personales</h3>
        </div>
        <div id="campos">
          <div class="row">
            <div class="row-col">
              <div class="label">
                <label for="nombres">Nombres</label>
              </div>
              <div class="input">
                <input type="text" name="nombres" id="nombres"/>
              </div>
            </div>
            <div class="row-col">
              <div class="label">
                <label for="apellidos">Apellidos</label>
              </div>
              <div class="input">
                <input type="text" name="apellidos" id="apellidos" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="row-col">
              <div class="label">
                <label for="cedula">Cédula</label>
              </div>
              <div class="input">
                <input type="text" name="cedula" id="cedula"/>
              </div>
            </div>
            <div class="row-col">
              <div class="label">
                <label for="email">Correo</label>
              </div>
              <div class="input">
                <input type="email" name="email" id="email"/>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="row-col">
              <div class="label">
                <label for="contrasena">Contraseña</label>
              </div>
              <div class="input">
                <input type="password" name="contrasena" id="contrasena"/>
              </div>
            </div>
            <div class="row-col">
              <div class="label">
                <label for="confirmacion">Confirmar</label>
              </div>
              <div class="input">
                <input type="password" name="confirmacion" id="confirmacion"/>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="row-col">
              <div class="label">
                <label for="telefono">Teléfono</label>
              </div>
              <div class="input">
                <input type="text" name="telefono" id="telefono"/>
              </div>
            </div>
            <div class="row-col">
              <div class="label">
                <label for="ciudad">Ciudad</label>
              </div>
              <div class="input">
                <select name="ciudad" class="ciudad" id="ciudad">
                  <option selected="selected" disabled="disabled" value="0">
                    Escoger ciudad
                  </option>
                  <option value="1">Quito</option>
                  <option value="2">Guayaquil</option>
                  <option value="3">Ambato</option>
                  <option value="4">Babahoyo</option>
                  <option value="5">Bahia de Caraquez</option>
                  <option value="6">Daule</option>
                  <option value="7">Duran</option>
                  <option value="8">La Libertad</option>
                  <option value="9">Machala</option>
                  <option value="10">Manta</option>
                  <option value="11">Milagro</option>
                  <option value="12">Playas</option>
                  <option value="13">Portoviejo</option>
                  <option value="14">Quevedo</option>
                  <option value="15">Riobamba</option>
                  <option value="16">Sto. Domingo</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="row-col">
              <div class="label">
                <label for="domicilio">Direccion Domicilio</label>
              </div>
              <div class="input">
                <textarea name="domicilio" id="domicilio" cols="37" rows="3"></textarea>
              </div>
            </div>
            <div class="row-col">
              <div class="no-center">
                <label for="fechaNac">Fecha Nacimiento</label>
              </div>
              <div class="input">
                <input type="date" name="fechaNac" id="fechaNac" />
              </div>
            </div>
          </div>
          <div id="button">
            <button type="submit" class="btnContinue">Registrarme</button>
          </div>
        </div>
      </form>
    </section>

    <script  src="../js/validarFormulario.js"></script>

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
            <img
              src="../ico/facebook.ico"
              style="width: 18px; height: 18px"
              alt="icono"
            />
            <a href="#">Facebook</a>
          </div>
          <div class="red">
            <img
              src="../ico/twitter.ico"
              style="width: 22px; height: 22px"
              alt="icono"
            />
            <a href="#">Twitter</a>
          </div>
          <div class="red">
            <img
              src="../ico/youtube.ico"
              style="width: 22px; height: 22px"
              alt="icono"
            />
            <a href="#">Youtube</a>
          </div>
          <div class="red">
            <img
              src="../ico/instagram.ico"
              style="width: 24px; height: 24px"
              alt="icono"
            />
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
