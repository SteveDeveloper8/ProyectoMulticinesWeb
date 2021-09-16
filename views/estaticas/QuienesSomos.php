<?php require_once '../partials/encabezado.php'; ?>
  <div class="contenedor-QuienesSomos">
    <div class="tituloSomos">
      <h2 class="cabeza">
        Quienes Somos <br />
        Multicines Ecuador
      </h2>
      <br />
      <p style="text-align: center">
        <strong>Estamos comprometidos con tu felicidad y tu relación con nuestra
          marca. Generamos valor a tu experiencia de entretenimiento.</strong>
      </p>
      <br />
    </div>
    <div class="Somos">
      <div class="texto">
        <p class="parrafo" style="text-align: center">
          Hacemos a los amigos más amigos, a los niños más felices, a las
          familias más unidas y a las parejas más cercanas. Creamos
          experiencias de entretenimiento que generan un sólido vínculo
          emocional con nuestra marca; valoramos la fidelidad de nuestros
          clientes.
        </p>
        <p class="parrafo" style="text-align: center">
          Enfocamos nuestra gestión en la experiencia de marca a través de
          políticas profesionales y estandarizadas de Servicio, Programa de
          Lealtad y Tecnologías de Acercamiento a través de información,
          interacción y compra de boletos por Web, App y Cajeros Automáticos
          de boletos ubicados en nuestros lobbies.
        </p>
      </div>
      <h3 class="encuentranos" style="text-align-last: center">
        Encuentranos en el pais
      </h3>
      <section class="Locacion">
        <div class="Locaciones">
          <div id="Guayaquil" onclick="seleccionLugar(this);">Guayaquil</div>
          <div id="Quito" onclick="seleccionLugar(this);">Quito</div>
          <div id="Cuenca" onclick="seleccionLugar(this);">Cuenca</div>
        </div>
        <div id="primera-seleccion2" class="seleccionLugar Guayaquil">
          <h3>GUAYAQUIL</h3>
          <div class="local">
            <div class="imgS">
              <img src="http://localhost/ProyectoMulticinesWeb/assets/img/MallRioGuayaquil.jpg" alt="CC Mall del Río" class="poster" />
            </div>
            <div class="detalle">
              <p>Mall del Río(Guyaquil) – MULTICINES MALL DEL RÍO<br /></p>
            </div>
          </div>
        </div>
        <div class="seleccionLugar Quito">
          <h3>QUITO</h3>
          <div class="local">
            <div class="imgS">
              <img src="http://localhost/ProyectoMulticinesWeb/assets/img/inaquito.jpg" alt="CC Mall del Río" class="poster" />
            </div>
            <div class="detalle">
              <p>Centro Comercial Iñaquito – MULTICINES CCI 9<br /></p>
            </div>
            <div class="imgS">
              <img src="http://localhost/ProyectoMulticinesWeb/assets/img/Recreo.png" alt="CC Mall del Río" class="poster" />
            </div>
            <div class="detalle">
              <p>Ciudad Comercial El Recreo – MULTICINES RECREO 13<br /></p>
            </div>
            <div class="imgS">
              <img src="http://localhost/ProyectoMulticinesWeb/assets/img/condado.jpg" alt="CC Mall del Río" class="poster" />
            </div>
            <div class="detalle">
              <p>Condado Shopping – MULTICINES CONDADO 9<br /></p>
            </div>
            <div class="imgS">
              <img src="http://localhost/ProyectoMulticinesWeb/assets/img/scala.jpg" alt="CC Mall del Río" class="poster" />
            </div>
            <div class="detalle">
              <p>Scala Shopping – MULTICINES SCALA 7<br /></p>
            </div>
          </div>
        </div>
        <div class="seleccionLugar Cuenca">
          <h3>CUENCA</h3>
          <div class="local">
            <div class="imgS">
              <img src="http://localhost/ProyectoMulticinesWeb/assets/img/MallRioCuenca.jpg" alt="CC Mall del Río" class="poster" />
            </div>
            <div class="detalle">
              <p>Mall del Río – MULTICINES MALL DEL RÍO 4<br /></p>
            </div>
            <div class="imgS">
              <img src="http://localhost/ProyectoMulticinesWeb/assets/img/Milenium-PlazaCuenca.jpg" alt="CC Mall del Río" class="poster" />
            </div>
            <div class="detalle">
              <p>
                Centro Comercial Millenium Plaza – MULTICINES MILENIUM 5
                <br />
              </p>
            </div>
            <div class="imgS">
              <img src="http://localhost/ProyectoMulticinesWeb/assets/img/batanCuenca.jpg" alt="CC Mall del Río" class="poster" />
            </div>
            <div class="detalle">
              <p>Batán Shopping – MULTICINES BATÁN 7<br /></p>
            </div>
          </div>
        </div>
      </section>
      <p class="final" style="text-align: center">
        <strong>WWW.MULTICINES.COM.EC</strong> <br />
        <strong>APP MULTICINES ECUADOR</strong> <br />
        sugerencias@multicines.com.ec – mercadeo@multicines.com.ec<br />
        Oficina Matriz<br />
        Av. González Suárez N27-317 y San Ignacio. Edificio Delta.<br />
        Quito - Ecuador<br />
        Teléfonos horas laborables: (593-2) 605-0683<br />
      </p>
    </div>
  </div>
  <?php require_once '../partials/footer.php';