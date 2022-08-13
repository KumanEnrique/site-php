<?php
namespace Controllers;

use Libs\Controller;

class Departaments extends Controller{
    public function __construct(){
        parent::__construct();
        $this->view->message = '';
        $this->view->data = [];
    }
    public function main(){
        $results = $this->model->get();
        $this->view->data = $results;
        $this->view->render('departaments/index');
        $this->view->callFooter();
    }
    public function formAdd(){
        $this->view->render('departaments/formAdd');
        $this->view->callFooter();
    }
    public function add(){
        if(! empty($_POST['in_charge']) && ! empty($_POST['name']) && ! empty($_POST['extension']) ){
            $data = ['in_charge' => $_POST['in_charge'],'name' => $_POST['name'],'extension' => $_POST['extension']];
            $response = $this->model->add($data);
            if($response){
                $this->view->message = '<p class="alert alert-success" role="alert">nuevo registro ingresado</p>';
            }else{
                $this->view->message = '<p class="alert alert-danger" role="alert">hubo un problema con el servidor</p>';
            }
            $this->view->render('departaments/formAdd');
            $this->view->callFooter();
        }else{
            $this->view->message = '<p class="alert alert-danger" role="alert">dato faltante de ingresar</p>';
            $this->view->render('departaments/formAdd');
            $this->view->callFooter();
        }
    }
    public function getByID($param){
        $row = $this->model->getByid($param);
        session_start();
        $_SESSION['id_departaments'] = $row['id'];
        
        $this->view->data = $row;
        $this->view->render('departaments/getByID');
        $this->view->callFooter();
    }
    public function update(){
        session_start();
        $data = ['id' => $_SESSION['id_departaments'],'in_charge' => $_POST['in_charge'],'name' => $_POST['name'],'extension' => $_POST['extension'] ];
        $response = $this->model->update($data);
        if($response){
            $this->view->message = '<p class="alert alert-success" role="alert">el registro se actualizo correctamente</p>';
            // $this->view->data = ['id' => $_SESSION['id_departaments'],'encargado' => $_POST['in_charge'],'nombre' => $_POST['name'],'extension' => $_POST['extension'] ];
        }else{
            $this->view->message = '<p class="alert alert-warning" role="alert">el registro no se actualizo correctamente</p>';
        }
        session_destroy();
        session_unset();
        $this->main();
    }
    public function delete($param){
        if($this->model->delete($param)){
            $mensaje = "departamento eliminado correctamente";
        }else{
            $mensaje = "hubo un problema en eliminar";
        }
        echo($mensaje);
        $this->main();
    }
}