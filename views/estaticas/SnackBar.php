<?php require_once 'views/partials/encabezado.php'; ?>
    <div class="snack-bar">
      <div class="bar-menu" id="menu-tipos">
        
      </div>
      <script type="text/javascript">
            llenarMenuTipos();
      </script>
      <!--Combos-->
      <div id="primera-seccion" class="mostrador combos">
        
      </div>
      <script type="text/javascript">
            cargarProductosIni();
            document.QuerySelectorAll('.Combos')[0].style.backgroundColor="rgb(207, 27, 111)";
      </script>
      </div>
    </div>
<?php require_once 'views/partials/footer.php';