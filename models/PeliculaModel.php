<?php

require_once 'config/Conexion.php';

class PeliculaModel {

    private $con;

    // constructor
    public function __construct() {
        $this->con = Conexion::getConexion(); // :: para acceder a funciones  static
    }

    public function listar() { // listar todos los productos
        $sql = "select * from pelicula";
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
        $sql = "select * from pelicula";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        // ejecutar la sentencia
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $producto = $stmt->fetch(PDO::FETCH_ASSOC);
        // retornar resultados
        return $producto;
    }

    public function buscar($parametro) {
       $sql = "SELECT * FROM pelicula";
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

    public function insertar($nom, $desc, $gen, $cla, $dur) {
        //prepare
        $sql = "INSERT INTO pelicula(peli_id, peli_nombre, peli_descripcion, peli_genero, peli_clasificacion_edad, peli_duracion) VALUES 
            (NULL, :nom, :desc, :gen, :cla, :dur)";
        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);
     
        $data = [
            'nom' => $nom,
            'desc' => $desc,
            'gen' => $gen,
            'cla' => $cla,
            'dur' => $dur,
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

    public function actualizar($nom, $desc, $gen, $cla, $dur) {
        //prepare
        $sql = "UPDATE `pelicula` SET `peli_id`=null,`peli_nombre`=:nom,`peli_descripcion`=:desc," .
                "`peli_genero`=:gen,`peli_clasificacion_edad`=:cla,`peli_duracion`=:dur";
        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);

        $data = [
            'nom' => $nom,
            'desc' => $desc,
            'gen' => $gen,
            'cla' => $cla,
            'dur' => $dur,
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

    public function eliminar($id, $usu) {
        //prepare
        $sql = "UPDATE `pelicula` SET `prod_estado`=0,`prod_usuarioActualizacion`=:usu," .
                "`prod_fechaActualizacion`=:fecha WHERE prod_id=:id";
        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $fechaActual = new DateTime('NOW');
        $strfecha = $fechaActual->format('Y-m-d H:i:s');
        $data = [
            'usu' => $usu,
            'fecha' => $strfecha,
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
