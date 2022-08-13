<?php
namespace Controllers;

use Libs\Controller;

class Order extends Controller{
    public function __construct(){
        parent::__construct();
        $this->view->data = [];
        $this->view->message = '';
    }
    public function main(){
        $results = $this->model->get();
        $this->view->data = $results;
        $this->view->render('order/index');
        $this->view->callFooter();
    }
    public function formAdd(){
        $this->view->render('order/formAdd');
        $this->view->callFooter();
    }
    public function add(){
        if(!empty($_POST['folio']) && !empty($_POST['state']) && !empty($_POST['description']) && !empty($_POST['departament']) && !empty($_POST['employee']) && !empty($_POST['begin_date']) ){
            $data = ['folio' => $_POST['folio'],'state' => $_POST['state'],'description' => $_POST['description'],'departament' => $_POST['departament'],'employee' => $_POST['employee'],'begin_date' => $_POST['begin_date'] ];
            $response = $this->model->add($data);
            if($response){
                $this->view->message = '<p class="alert alert-success" role="alert">nuevo registro ingresado</p>';
            }else{
                $this->view->message = '<p class="alert alert-danger" role="alert">hubo un problema con el servidor</p>';
            }
            $this->view->render('order/formAdd');
            $this->view->callFooter();
        }else{
            $this->view->message = '<p class="alert alert-danger" role="alert">dato faltante de ingresar</p>';
            $this->view->render('order/formAdd');
            $this->view->callFooter();
        }
    }
    public function getByID($param){
        $row = $this->model->getByid($param);
        session_start();
        $_SESSION['id_order'] = $row['id'];
        $this->view->data = $row;
        $this->view->render('order/getByID');
        $this->view->callFooter();
    }
    public function update(){
        session_start();
        $data = ['id' => $_SESSION['id_order'],'folio' => $_POST['folio'],'state' => $_POST['state'],'description' => $_POST['description'],'departament' => $_POST['departament'],'employee' => $_POST['employee'],'begin_date' => $_POST['begin_date'] ];
        $response = $this->model->update($data);
        if($response){
            $this->view->message = '<p class="alert alert-success" role="alert">el registro se actualizo correctamente</p>';
            // $this->view->data = ['id' => $_SESSION['id_alumno'],'nombre' => $_POST['name'],'departamento' => $_POST['departament'],'correo' => $_POST['email'] ];
        }else{
            $this->view->message = '<p class="alert alert-warning" role="alert">el registro no se actualizo correctamente</p>';
        }
        session_destroy();
        session_unset();
        $this->main();
    }
    public function delete($param){
        if($this->model->delete($param)){
            $mensaje = "orden eliminado correctamente";
        }else{
            $mensaje = "hubo un problema en eliminar";
        }
        echo($mensaje);
        $this->main();
    }
}