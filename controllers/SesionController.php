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
}
