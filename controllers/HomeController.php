<?php
if(isset($_SESSION["nombre"])){
    require_once 'partials/encabezadoConectado.php';
}else{
    require_once 'partials/encabezado.php';
}
