<?php require_once 'views/partials/encabezado.php'; ?>
  <div class="tituloCartelera">
    <h1 style="text-align: center">CARTELERA MULTICINES</h1>
    <p>Tu mejor eleccion en experiencia cinematografica</p>
    <br />
    <h3 style="text-align-last: center">
      Escoge el dia para ver tu pelicula favorita
    </h3>
    <br />
  </div>
  <section class="diaSemana">
    <div class="semana">
      <div id="Lunes" onclick="seleccionarDia(this);">
        lun.
        <span class="fechadia">19 jul.2021</span>
      </div>
      <div id="Martes" onclick="seleccionarDia(this);">
        mar.
        <span class="fechadia">20 jul.2021</span>
      </div>
      <div id="Miercoles" onclick="seleccionarDia(this);">
        mie.
        <span class="fechadia">21 jul.2021</span>
      </div>
      <div id="Jueves" onclick="seleccionarDia(this);">
        jue.
        <span class="fechadia">22 jul.2021</span>
      </div>
      <div id="Viernes" onclick="seleccionarDia(this);">
        vie.
        <span class="fechadia">23 jul.2021</span>
      </div>
      <div id="Sabado" onclick="seleccionarDia(this);">
        sab.
        <span class="fechadia">24 jul.2021</span>
      </div>
      <div id="Domingo" onclick="seleccionarDia(this);">
        dom.
        <span class="fechadia">25 jul.2021</span>
      </div>
    </div>
    <div class="listaPeliculas">
      <!--Lunes-->
      <div id="primera-seleccion" class="seleccionDia Lunes">
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/black-widow.png" alt="Black Widow" class="poster" />
          </div>
          <div class="detalles">
            <h2>Black Widow</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">12 años | 135 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <br />
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">22:30</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/duro-de-cuidar.jpg" alt="duro-de-cuidar2" class="poster" />
          </div>
          <div class="detalles">
            <h2>Duro de Cuidar 2</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">15 años | 120 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:30</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">22:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">23:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/rapidos-y-furiosos-9.jpeg" alt="rapidos-y-furiosos-9" class="poster" />
          </div>
          <div class="detalles">
            <h2>Rapidos y Furiosos 9</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">12 años | 145 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">19:30</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">22:30</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Martes-->
      <div class="seleccionDia Martes">
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/black-widow.png" alt="Black Widow" class="poster" />
          </div>
          <div class="detalles">
            <h2>Black Widow</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">12 años | 135 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">22:30</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto">2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/space-jam-2-una-nueva-era.jpg" alt="space-jam-2-una-nueva-era" class="poster" />
          </div>
          <div class="detalles">
            <h2>Space Jam 2 Una Nueva Era</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">12 años | 120 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:10</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto">3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/el-conjuro-3-el-diablo-me-obligo.jpg" alt="el-conjuro-3-el-diablo-me-obligo"
              class="poster" />
          </div>
          <div class="detalles">
            <h2>El Conjuro 3: El Diablo me obligo</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">15 años | 120 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">22:30</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Miercoles-->
      <div class="seleccionDia Miercoles">
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/black-widow.png" alt="Black Widow" class="poster" />
          </div>
          <div class="detalles">
            <h2>Black Widow</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">12 años | 135 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">22:30</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto">3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/g.i.-joe-snake-eyes-85673.jpg" alt="duro-de-cuidar2" class="poster" />
          </div>
          <div class="detalles">
            <h2>G.I. Joe: Snake Eyes</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">12 años | 120 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">SUBTITULADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:30</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/la-purga-por-siempre.jpg" alt="la-purga-por-siempre" class="poster" />
          </div>
          <div class="detalles">
            <h2>La Purga por siempre</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">15 años | 105 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">22:35</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">22:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">SUBTITULADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Jueves-->
      <div class="seleccionDia Jueves">
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/space-jam-2-una-nueva-era.jpg" alt="space-jam-2-una-nueva-era" class="poster" />
          </div>
          <div class="detalles">
            <h2>Space Jam 2 Una Nueva Era</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">12 años | 120 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:10</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/duro-de-cuidar.jpg" alt="duro-de-cuidar2" class="poster" />
          </div>
          <div class="detalles">
            <h2>Duro de Cuidar 2</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">15 años | 120 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">22:30</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/rapidos-y-furiosos-9.jpeg" alt="rapidos-y-furiosos-9" class="poster" />
          </div>
          <div class="detalles">
            <h2>Rapidos y Furiosos 9</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">12 años | 145 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">22:30</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Viernes-->
      <div class="seleccionDia Viernes">
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/g.i.-joe-snake-eyes-85673.jpg" alt="duro-de-cuidar2" class="poster" />
          </div>
          <div class="detalles">
            <h2>G.I. Joe: Snake Eyes</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">12 años | 120 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">SUBTITULADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:30</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/space-jam-2-una-nueva-era.jpg" alt="space-jam-2-una-nueva-era" class="poster" />
          </div>
          <div class="detalles">
            <h2>Space Jam 2 Una Nueva Era</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">12 años | 135 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:10</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/el-conjuro-3-el-diablo-me-obligo.jpg" alt="el-conjuro-3-el-diablo-me-obligo"
              class="poster" />
          </div>
          <div class="detalles">
            <h2>El Conjuro 3: El Diablo me obligo</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">15 años | 120 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">22:30</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Sabado-->
      <div class="seleccionDia Sabado">
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/space-jam-2-una-nueva-era.jpg" alt="space-jam-2-una-nueva-era" class="poster" />
          </div>
          <div class="detalles">
            <h2>Space Jam 2 Una Nueva Era</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">12 años | 120 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:10</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/el-conjuro-3-el-diablo-me-obligo.jpg" alt="el-conjuro-3-el-diablo-me-obligo"
              class="poster" />
          </div>
          <div class="detalles">
            <h2>El Conjuro 3: El Diablo me obligo</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">15 años | 120 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">22:30</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/rapidos-y-furiosos-9.jpeg" alt="rapidos-y-furiosos-9" class="poster" />
          </div>
          <div class="detalles">
            <h2>Rapidos y Furiosos 9</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">12 años | 145 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">22:30</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Domingo-->
      <div class="seleccionDia Domingo">
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/g.i.-joe-snake-eyes-85673.jpg" alt="duro-de-cuidar2" class="poster" />
          </div>
          <div class="detalles">
            <h2>G.I. Joe: Snake Eyes</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">12 años | 120 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">SUBTITULADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:30</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/duro-de-cuidar.jpg" alt="duro-de-cuidar2" class="poster" />
          </div>
          <div class="detalles">
            <h2>Duro de Cuidar 2</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">15 años | 120 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">22:30</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="peliculas">
          <div class="imagen">
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/rapidos-y-furiosos-9.jpeg" alt="rapidos-y-furiosos-9" class="poster" />
          </div>
          <div class="detalles">
            <h2>Rapidos y Furiosos 9</h2>
            <div class="detallesPelicula">
              <div class="bloque">
                <a class="enlacePelicula" href="#"> ver detalle </a>
              </div>
              <div class="clasificacion">12 años | 145 min</div>
            </div>
          </div>
          <div class="detalleshorarios">
            <small class="info"> * Los horarios de cada función </small>
            <div class="contieneHorarios">
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">22:30</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 3D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">21:00</div>
                </div>
              </div>
              <div class="horarios">
                <div class="item">
                  <span class="texto"> 2D</span>
                  <span class="texto">DOBLADA</span>
                  <div class="ubicacion">
                    <span class="sillas"> Sillas: </span>
                    <span class="sillas"> GENERAL </span>
                  </div>
                </div>
                <div class="contenedorHora">
                  <div class="hora">20:00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php require_once 'views/partials/footer.php';