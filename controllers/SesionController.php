<?php 
require_once "models/SesionModel.php";
class SesionController 
{
    private $model;
    public function __construct(){
        $this->model=new SesionModel();
    }
    public function entrar(){
        require_once "views/login/login.php";//llamar a la vista
    }
    public function registrar(){
        // leer parametros
        $nom = htmlentities($_POST['nombre']);
        $ape = htmlentities($_POST['apellidos']);
        $ced = htmlentities($_POST['cedula']);
        $email = htmlentities($_POST['email']);
        $cont = htmlentities($_POST['contrasena']);
        $telf = htmlentities($_POST['telefono']);
        $dom = htmlentities($_POST['domicilio']);
        $fecha = htmlentities($_POST['fechaNac']);
      
        //if(!isset($_POST['codigo'])){ header('');}
        
        //llamar al modelo
        $exito = $this->model->insertar($nom, $ape, $ced, $email, $cont, $telf, $dom, $fecha;
        $msj = 'usuario guardado exitosamente';
        $color = 'primary';
        if (!$exito) {
            $msj = "No se pudo realizar el guardado";
            $color = "danger";
        }
        session_start();
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;

        //llamar a la vista
        header('Location:index.php?c=homeView&a=index');
    }
}
