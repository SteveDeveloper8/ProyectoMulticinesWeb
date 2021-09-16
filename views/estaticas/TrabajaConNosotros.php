<?php require_once 'views/partials/encabezado.php'; ?>  
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
<?php require_once 'views/partials/footer.php';