<?php require_once '../partials/encabezado.php'; ?>
    <div class="snack-bar">
      <div class="bar-menu">
        <div id="combos" onclick="cambiarSeccion(this);">
            Combos
        </div>
        <div id="bebidas" onclick="cambiarSeccion(this);">
            Bebidas
        </div>
        <div id="snacks" onclick="cambiarSeccion(this);">
            Snacks
        </div>
        <div id="salsas" onclick="cambiarSeccion(this);">
            Salsas
        </div>
        <div id="dulces" onclick="cambiarSeccion(this);">
            Dulces
        </div>
        <div id="promo" onclick="cambiarSeccion(this);">
            Promocionales
        </div>
      </div>
      <!--Combos-->
      <div id="primera-seccion" class="mostrador combos">
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/combo1.jpg" alt="combo 1">
            <p>COMBO 1</p>
            <p><b>$7.99</b></p>
        </div>
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/combo2.jpg" alt="combo 2">
            <p>COMBO 2</p>
            <p><b>$7.99</b></p>
        </div>
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/combo3.jpg" alt="combo 3">
            <p>COMBO 3:HOT DOG NACHO QUESO</p>
            <p><b>$12.99</b></p>
        </div>
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/combo3-chili.jpg" alt="combo 3">
            <p>COMBO 3:HOT DOG NACHO CHILI</p>
            <p><b>$12.99</b></p>
        </div>
      </div>
      <!--Bebidas-->
      <div class="mostrador bebidas">
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/bebida-grande.jpg" alt="bebida grande">
            <p>BEBIDA GRANDE 44OZ</p>
            <p><b>$3.40</b></p>
        </div>
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/bebida-hershey.jpg" alt="hot chocolate hersheys">
            <p>HOT CHOCOLATE HERSHEYS</p>
            <p><b>$1.80</b></p>
        </div>
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/hersheysc&c.jpg" alt="hersheys cookies and cream">
            <p>HERSHEYS COOKIES AND CREAM</p>
            <p><b>$3.50</b></p>
        </div>
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/agua.jpg" alt="agua">
            <p>AGUA SIN GAS</p>
            <p><b>$1.85</b></p>
        </div>
      </div>
      <!--Snacks-->
      <div class="mostrador snacks">
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/canguil-grande.jpg" alt="cangul grande sal">
            <p>CANGUIL GRANDE SAL</p>
            <p><b>$3.35</b></p>
        </div>
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/hot-dog.jpg" alt="hot dog">
            <p>HOT DOG</p>
            <p><b>$4.00</b></p>
        </div>
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/nachos-queso.jpg" alt="nachos queso">
            <p>NACHOS QUESO</p>
            <p><b>$4.00</b></p>
        </div>
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/nachos-chili.jpg" alt="nachos chili">
            <p>NACHOS CHILI</p>
            <p><b>$4.00</b></p>
        </div>
      </div>
      <!--Snacks-->
      <div class="mostrador salsas">
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/salsa-queso.jpg" alt="salsa queso">
            <p>SALSA EXTRA QUESO</p>
            <p><b>$1.65</b></p>
        </div>
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/salsa-chili.jpg" alt="hot dog">
            <p>SALSA EXTRA CHILI</p>
            <p><b>$1.65</b></p>
        </div>
      </div>
      <!--Dulces-->
      <div class="mostrador dulces">
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/snickers.jpg" alt="snickers">
            <p>SNICKERS</p>
            <p><b>$2.50</b></p>
        </div>
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/twix.jpg" alt="twix">
            <p>TWIX</p>
            <p><b>$2.50</b></p>
        </div>
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/skittles.jpg" alt="skittles">
            <p>SKITTLES</p>
            <p><b>$2.50</b></p>
        </div>
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/m&m.jpg" alt="m&m's">
            <p>M&M</p>
            <p><b>$2.50</b></p>
        </div>
      </div>
      <!--Promocionales-->
      <div class="mostrador promo">
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/pok-black-widow.jpg" alt="pok black widow">
            <p>POK BLACK WIDOW</p>
            <p><b>$7.90</b></p>
        </div>
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/pok-mujer-maravilla.jpg" alt="pok mujer maravilla">
            <p>POK MUJER MARAVILLA</p>
            <p><b>$4.99</b></p>
        </div>
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/llavero-r&f.jpg" alt="llavero rapidos y furiosos">
            <p>LLAVERO RÁPIDOS Y FURIOSOS</p>
            <p><b>$5.00</b></p>
        </div>
        <div>
            <img src="http://localhost/ProyectoMulticinesWeb/assets/img/pok-onward.jpg" alt="pok onward">
            <p>POK ONWARD</p>
            <p><b>$4.99</b></p>
        </div>
      </div>
    </div>
<?php require_once '../partials/footer.php';