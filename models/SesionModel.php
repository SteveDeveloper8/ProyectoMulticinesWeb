<?php
require_once 'config/Conexion.php';

class SesionModel {
    private $con;
    
    public function __construct() {
        $this->con = Conexion::getConexion();
    }
    
    public function insertar($nom, $desc, $gen, $cla, $dur) {
        //prepare
        $sql = "INSERT INTO registro(peli_id, peli_nombre, peli_descripcion, peli_genero, peli_clasificacion_edad, peli_duracion) VALUES 
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
}
