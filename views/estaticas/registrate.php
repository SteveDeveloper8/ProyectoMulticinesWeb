<?php require_once 'views/partials/encabezado.php'; ?>
    <section id="formulario">
      <h1>Registro de usuario</h1>
      <form onsubmit="return validar()" class="body-formulario" action="index.php?c=sesion&a=registrar" method="Post">
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

    <script  src="http://localhost/ProyectoMulticinesWeb/assets/js/validarFormulario.js"></script>

    <?php require_once 'views/partials/footer.php';