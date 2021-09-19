<?php

require_once 'models/PeliculaModel.php';
class PeliculaController {

    private $model;

    public function __construct() {
        $this->model = new PeliculaModel();
    }

    // funcion del controlador
    public function index() {

        //llamar al modelo, obtener los  datos que me da el modelo
        $resultados = $this->model->listar();
        // llamar a la vista (incluir la vista)
        require_once 'views/Pelicula/listarpeliculaView.php';
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
        $modelCat = new PeliculaModel();
        $categorias = $modelCat->consultar();

        // llamar a la vista
        require_once 'views/Pelicula/nuevopeliculaView.php';
    }
    public function listarGeneros(){
        $generos = $this->model->consultarGeneros();
        echo json_encode($generos);
    }
    private function agregarArchivo(){
        $directorio = "archivos/";
        $rutaUniversal="http://localhost/ProyectoMulticinesWeb/";
        $archivo = $directorio . basename($_FILES['image']['name']);
        $tipo_archivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
            if($tipo_archivo == "jpg" || $tipo_archivo == "png" || $tipo_archivo == "jpeg"){
                if(move_uploaded_file($_FILES["image"]["tmp_name"], $archivo)){
                        return $rutaUniversal.$archivo;
                }else{
                    return  false;
                }
            }else{
                return  false;
            }
    }
    public function agregar() {
        // leer parametros
        $nom = htmlentities($_POST['nombre']);
        $desc = htmlentities($_POST['descripcion']);
        $gen = htmlentities($_POST['genero']);
        $cla = htmlentities($_POST['clasificacion_edad']);
        $dur = htmlentities($_POST['duracion']);
        $est = (isset($_POST['estado'])) ? 1 : 0;

        $img = $this->agregarArchivo();
        //llamar al modelo
        $exito = $this->model->insertar($nom, $desc, $gen, $cla, $dur, $est, $img);
        $msj = 'Pelicula guardado exitosamente';
        $color = 'primary';
        if (!$exito) {
            $msj = "No se pudo realizar el guardado";
            $color = "danger";
        }
        session_start();
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;

        //llamar a la vista
        header('Location:index.php?c=Pelicula&a=index');
    }

    private function prompt($mensaje){
        echo "<script type='text/javascript'>alert('".$mensaje."');</script>";
    }
    
    public function eliminar(){
          // leer parametros
        $id = htmlentities($_GET['id']);

        $exito = $this->model->eliminar($id);
        $msj = 'Pelicula eliminado exitosamente';
        $color = 'primary';
        if (!$exito) {
            $msj = "No se pudo realizar la eliminacion";
            $color = "danger";
        }
        session_start();
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;

        //llamar a la vista
        header('Location:index.php?c=Pelicula&a=index'); // redireccionamiento, causa un cambio en la url
        
    }
    
    public function mostrar(){// MUESTRA EL FORMULARIO DE PRODUCTO EXISTENTE PARA SU EDICION
         // llamar al modelo
        require_once 'models/PeliculaModel.php';
        $modelCat = new PeliculaModel();
        $categorias = $modelCat->consultar(); // obtener las categorias de productos
        
        $id = $_GET['id'];
        $peli =  $this->model->buscarxId($id);
        
        // llamar a la vista
        require_once 'views/Pelicula/editarpeliculaView.php';
        
    }
    public function vistaEditar(){
        $id = htmlentities($_GET['id']);
        $peli=$this->model->buscarxId($id);
        
        require_once 'views/Pelicula/editarpeliculaView.php';
    }
    public function editar() {
        // leer parametros
        $nom = htmlentities($_POST['nombre']);
        $desc = htmlentities($_POST['descripcion']);
        $gen = htmlentities($_POST['genero']);
        $cla = htmlentities($_POST['clasificacion_edad']);
        $dur = htmlentities($_POST['duracion']);
        $est = (isset($_POST['estado'])) ? 1 : 0;
        if(isset($_FILES['imagen']['name']))
        $img = $this->agregarArchivo();
        else
        $img = htmlentities($_POST['imagen']);
        //llamar al modelo
        $exito = $this->model->actualizar($nom, $desc, $gen, $cla, $dur, $est, $img);
        $msj = 'Pelicula actualizado exitosamente';
        $color = 'primary';
        if (!$exito) {
            $msj = "No se pudo realizar la actualizacion";
            $color = "danger";
        }
        session_start();
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;

        //llamar a la vista
        header('Location:index.php?c=Pelicula&a=index');
    }
}
