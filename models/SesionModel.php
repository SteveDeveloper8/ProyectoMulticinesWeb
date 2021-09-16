<?php
require_once 'config/Conexion.php';

class SesionModel {
    private $con;
    
    public function __construct() {
        $this->con = Conexion::getConexion();
    }
    
 
}
