<?php require_once '../partials/encabezado.php'; ?>
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
        <img src="http://localhost/ProyectoMulticinesWeb/assets/img/multicines_contacto.jpg" alt="Contactenos Multicine">
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

  <?php require_once '../partials/footer.php';
