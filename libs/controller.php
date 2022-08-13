<?php
namespace Libs;
class Controller{
    public function __construct(){
        // echo("<p>controlador principal</p>");
        $this->view = new View();
    }
    public function loadModel($model){
        $file = 'models/' . $model . 'model.php';
        if(file_exists($file)){
            $tempo = 'models\\' . $model . 'Model' ;
            $this->model = new $tempo();
        }else{
            print('<p>la url del archivo es: <b>'.__FILE__.'</b></p>');
        }
    }
}