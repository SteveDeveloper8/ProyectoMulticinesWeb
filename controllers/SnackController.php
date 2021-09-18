<?php

require_once 'models/SnackModel.php';

class SnackController {

    private $model;

    public function __construct() {
        $this->model = new SnackModel();
    }

    // funcion del controlador
    public function index() {

        //llamar al modelo, obtener los  datos que me da el modelo
        $resultados = $this->model->listar();
        // llamar a la vista (incluir la vista)
        require_once 'views/Producto/listarproductoView.php';
    }

       public function buscarAjax(){
       //lectura de parametros
       $busq= $_GET['b'];
       
       //llamar al modelo
       $resultados = $this->model->buscar($busq);
       //llama a la vista
    //    require_once 'views/productos/listaproductosView.php';
        
        echo json_encode($resultados);
   }
    
    public function nuevo() {// MOSTRAR EL FOMULARIO DE NUEVO PRODUCTO
        // llamar al modelo
        require_once 'models/SnackModel.php';
        $modelCat = new SnackModel();
        $categorias = $modelCat->consultar();

        // llamar a la vista
        require_once 'views/Producto/nuevoproductoView.php';
    }

    public function agregar() {
        // leer parametros
        
        $nom = htmlentities($_POST['nombre']);
        $desc = htmlentities($_POST['descripcion']);
        $tip = htmlentities($_POST['tipo']);
        $cla = htmlentities($_POST['clasificacion']);
        $img = htmlentities($_POST['imagen']);
        $pre = htmlentities($_POST['precio']);
        $est = (isset($_POST['estado'])) ? 1 : 0;
        
        
        //llamar al modelo
        $exito = $this->model->insertar($nom, $desc, $tip, $cla, $img, $pre, $est);
        $msj = 'Snack guardado exitosamente';
        $color = 'primary';
        if (!$exito) {
            $msj = "No se pudo realizar el guardado";
            $color = "danger";
        }
        session_start();
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;

        //llamar a la vista
        header('Location:index.php?c=Snack&a=index');
    }

    
    
    public function eliminar(){
          // leer parametros
        $id = htmlentities($_GET['id']);

        $exito = $this->model->eliminar($id);
        $msj = 'Producto eliminado exitosamente';
        $color = 'primary';
        if (!$exito) {
            $msj = "No se pudo realizar la eliminacion";
            $color = "danger";
        }
        session_start();
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;

        //llamar a la vista
        header('Location:index.php?c=Snack&a=index'); // redireccionamiento, causa un cambio en la url
        
    }
    
    public function mostrar(){// MUESTRA EL FORMULARIO DE PRODUCTO EXISTENTE PARA SU EDICION
         // llamar al modelo
        require_once 'models/ProductoModel.php';
        $modelCat = new ProductoModel();
        $categorias = $modelCat->consultar(); // obtener las categorias de productos
        
        $id = $_GET['id'];
        $snack =  $this->model->buscarxId($id);
        
        // llamar a la vista
        require_once 'views/Producto/editarproductoView.php';
        
    }
    public function vistaEditar(){
        $id = htmlentities($_GET['id']);
        $snack=$this->model->buscarxId($id);
        
        require_once 'views/Producto/editarproductoView.php';
    }
    public function editar() {
        // leer parametros
        $nom = htmlentities($_POST['nombre']);
        $desc = htmlentities($_POST['descripcion']);
        $tip = htmlentities($_POST['tipo']);
        $cla = htmlentities($_POST['clasificacion']);
        $img = htmlentities($_POST['imagen']);
        $pre = htmlentities($_POST['precio']);
        $est = (isset($_POST['estado'])) ? 1 : 0;
        
        //llamar al modelo
        $exito = $this->model->actualizar($nom, $desc, $tip, $cla, $img, $pre, $est);
        $msj = 'Producto actualizado exitosamente';
        $color = 'primary';
        if (!$exito) {
            $msj = "No se pudo realizar la actualizacion";
            $color = "danger";
        }
        session_start();
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;

        //llamar a la vista
        header('Location:index.php?c=Snack&a=index');
    }

    
}
