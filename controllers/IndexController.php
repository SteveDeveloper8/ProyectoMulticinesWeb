<?php

class IndexController {
    
    public function index(){
        require_once 'models/PeliculaModel.php';
        $model=new PeliculaModel();
        $resultados = $model->listar();
        session_start();
        if(!isset($_SESSION["rol"]))
        $_SESSION["rol"]='Cliente';
        require_once 'views/homeView.php'; //mostrando la vista de home de la aplicacion
        
    }
    
    public function estaticas(){
        $page =  $_GET['p'];
        session_start();
        require_once 'views/estaticas/'.$page.'.php';
        
    }
    public function pelicula(){
        session_start();
        $page =  $_GET['p'];
        require_once 'views/Pelicula/'.$page.'.php';
        
    }
    
}
