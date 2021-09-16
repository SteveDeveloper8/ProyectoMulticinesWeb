<?php
require_once 'config/Conexion.php';

class SnackModel {
    private $con;
    
    public function __construct() {
        $this->con = Conexion::getConexion();
    }
    
    public function consultar(){
          //prepare
        $sql="select * from Snack ";
        $sentencia = $this->con->prepare($sql);
        //binding parameters
        //execute
        $sentencia->execute();
        //retornar resultados
        $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
       return $resultados;
        
    }
}
