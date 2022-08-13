<?php
namespace Controllers;

use Libs\Controller;

class Employees extends Controller{
    public function __construct(){
        parent::__construct();
        $this->view->data = [];
        $this->view->message = '';
    }
    public function main(){
        $results = $this->model->get();
        $this->view->data = $results;
        $this->view->render('employees/index');
        $this->view->callFooter();
    }
    public function formAdd(){
        $this->view->render('employees/formAdd');
        $this->view->callfooter();
    }
    public function add(){
        if(!empty($_POST['name']) && !empty($_POST['control_number']) && !empty($_POST['begin_date']) ){
            $data = ['name' => $_POST['name'],'control_number' => $_POST['control_number'],'begin_date' => $_POST['begin_date'] ];
            $response = $this->model->add($data);
            if($response){
                $this->view->message = '<p class="alert alert-success" role="alert">nuevo registro ingresado</p>';
            }else{
                $this->view->message = '<p class="alert alert-danger" role="alert">hubo un problema con el servidor</p>';
            }
            $this->view->render('employees/formAdd');
            $this->view->callFooter();
        }else{
            $this->view->message = '<p class="alert alert-danger" role="alert">dato faltante de ingresar</p>';
            $this->view->render('employees/formAdd');
            $this->view->callFooter();
        }
    }
    public function delete($param){
        if($this->model->delete($param)){
            $mensaje = "trabajador eliminado correctamente";
        }else{
            $mensaje = "hubo un problema en eliminar";
        }
        echo($mensaje);
        $this->main();
    }
    public function getByID($param){
        $row = $this->model->getByid($param);
        session_start();
        $_SESSION['id_employee'] = $row['id'];
        $this->view->data = $row;
        $this->view->render('employees/getByID');
        $this->view->callFooter();
    }
    public function update(){
        session_start();
        $data = ['id' => $_SESSION['id_employee'],'name' => $_POST['name'],'control_number' => $_POST['control_number'],'begin_date' => $_POST['begin_date'],'end_date' => $_POST['end_date'] ];
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
}