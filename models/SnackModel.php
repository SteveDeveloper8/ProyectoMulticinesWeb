<?php

require_once 'config/Conexion.php';

class SnackModel {

    private $con;

    // constructor
    public function __construct() {
        $this->con = Conexion::getConexion(); // :: para acceder a funciones  static
    }
    public function consultar(){
        //prepare
      $sql="select * from snack inner join tipo on tipo_id=prod_tipo_id where prod_estado=1";
      $sentencia = $this->con->prepare($sql);
      //binding parameters
      //execute
      $sentencia->execute();
      //retornar resultados
      $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
      
     return $resultados;
      
  }
  public function consultarTipos() { // listar todos los productos
    $sql = "select * from tipo";
    // preparar la sentencia
    $stmt = $this->con->prepare($sql);
    // ejecutar la sentencia
    $stmt->execute();
    // recuperar los datos (en caso de select)
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // retornar resultados
    return $resultados;
}
    public function consultarProdxTipos($tipo){
        $sql = "select * from snack inner join tipo on tipo_id=prod_tipo_id where prod_estado=1 AND tipo_id= :tipo";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        // ejecutar la sentencia
        $data = ['tipo' => $tipo];
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retornar resultados
        return $resultados;
    }
    public function listar() { // listar todos los productos
        $sql = "select * from snack inner join tipo on tipo_id=prod_tipo_id where prod_estado=1";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        // ejecutar la sentencia
        $stmt->execute();
        // recuperar los datos (en caso de select)
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retornar resultados
        return $resultados;
    }

    public function buscarxId($id) { // listar todos los productos
        $sql = "select * from snack inner join tipo on tipo_id=prod_tipo_id where prod_estado=1 and prod_id=:id";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        // ejecutar la sentencia
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $snack = $stmt->fetch(PDO::FETCH_ASSOC);
        // retornar resultados
        return $snack;
    }

    public function buscar($parametro) {
       $sql = "SELECT * FROM snack inner join tipo on tipo_id=prod_tipo_id where prod_estado=1";
        $stmt = $this->con->prepare($sql);
        // preparar la sentencia
        $conlike = '%' . $parametro . '%';
        $data = ['b1' => $conlike, 'b2' => $conlike];
        // ejecutar la sentencia
        $stmt->execute($data);
        //obtener y retornar resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }

    public function insertar($nom, $desc, $tip, $cla, $img, $pre, $est) {
        //prepare
        
        $sql = "INSERT INTO snack(prod_nombre, prod_descripcion, prod_tipo_id, prod_clasificacion, prod_dir_imagen, prod_precio, prod_estado) VALUES
         (:nom, :desc, :tip, :cla, :img, :pre, :est)";
        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);
      
        $data = [
            'nom' => $nom,
            'desc' => $desc,
            'tip' => $tip,
            'cla' => $cla,
            'img' => $img,
            'pre' => $pre,
            'est' => $est,

        ];
        //execute
        $sentencia->execute($data);
        //retornar resultados, 
        if ($sentencia->rowCount() <= 0) {// verificar si se inserto 
            //rowCount permite obtner el numero de filas afectadas
            return false;
        }
        return true;
        

    }

    public function actualizar($nom, $desc, $tip, $cla, $img, $pre, $est) {
        $sql = "UPDATE snack SET prod_descripcion=:desc," .
                "prod_tipo_id=:tip,prod_clasificacion=:cla,prod_dir_imagen=:img,prod_precio=:pre, prod_estado=:est
                 where prod_nombre=:nom; ";
        
        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);

        $data = [
            'nom' => $nom,
            'desc' => $desc,
            'tip' => $tip,
            'cla' => $cla,
            'img' => $img,
            'pre' => $pre,
            'est' => $est,

        ];
        //execute
        $sentencia->execute($data);
        //retornar resultados, 
        if ($sentencia->rowCount() <= 0) {// verificar si se inserto 
            //rowCount permite obtner el numero de filas afectadas
            return false;
        }
        return true;
    }

    public function eliminar($id) {
        //prepare
        $sql = "UPDATE `snack` SET `prod_estado`=0 WHERE prod_id=:id";
        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);
        
        $data = [
            'id' => $id
        ];
        //execute
        $sentencia->execute($data);
        //retornar resultados, 
        if ($sentencia->rowCount() <= 0) {// verificar si se inserto 
            //rowCount permite obtner el numero de filas afectadas
            return false;
        }
        return true;
    }

}
