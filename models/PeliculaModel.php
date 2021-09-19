<?php

require_once 'config/Conexion.php';

class PeliculaModel {

    private $con;

    // constructor
    public function __construct() {
        $this->con = Conexion::getConexion(); // :: para acceder a funciones  static
    }
    public function consultar(){
        //prepare
      $sql="select * from pelicula inner join genero on gen_id=peli_id_genero where peli_estado=1";
      $sentencia = $this->con->prepare($sql);
      //binding parameters
      //execute
      $sentencia->execute();
      //retornar resultados
      $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
      
     return $resultados;
      
  }

    public function listar() { // listar todos los productos
        $sql = "select * from pelicula inner join genero on gen_id=peli_id_genero where peli_estado=1";
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
        $sql = "select * from pelicula inner join genero on gen_id=peli_id_genero where peli_id=:id and peli_estado=1";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        // ejecutar la sentencia
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $peli = $stmt->fetch(PDO::FETCH_ASSOC);
        // retornar resultados
        return $peli;
    }

    public function buscar($parametro) {
       $sql = "SELECT * FROM pelicula inner join genero on gen_id=peli_id_genero where peli_estado=1";
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
    public function consultarGeneros() { // listar todos los productos
        $sql = "select * from genero";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        // ejecutar la sentencia
        $stmt->execute();
        // recuperar los datos (en caso de select)
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retornar resultados
        return $resultados;
    }
    public function insertar($nom, $desc, $gen, $cla, $dur, $est,$img) {
        //prepare
        $sql = "INSERT INTO pelicula(peli_nombre, peli_descripcion, peli_id_genero, peli_clasificacion_edad, peli_duracion, peli_estado, peli_imagen) VALUES 
            (:nom, :desc, :gen , :cla, :dur, :est, :img)";
        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);
     
        $data = [
            'nom' => $nom,
            'desc' => $desc,
            'gen' => $gen,
            'cla' => $cla,
            'dur' => $dur,
            'est' => $est,
            'img' => $img
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

    public function actualizar($nom, $desc, $gen, $cla, $dur, $est, $img) {
        $sql = "UPDATE pelicula SET peli_descripcion=:desc," .
                "peli_id_genero=:gen,peli_clasificacion_edad=:cla,peli_duracion=:dur,
                 peli_estado=:est, peli_imagen=:img  where peli_nombre=:nom; ";
        
        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);

        $data = [
            'nom' => $nom,
            'desc' => $desc,
            'gen' => $gen,
            'cla' => $cla,
            'dur' => $dur,
            'est' => $est,
            'img' => $img,

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
        $sql = "UPDATE `pelicula` SET `peli_estado`=0 WHERE peli_id=:id";
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
