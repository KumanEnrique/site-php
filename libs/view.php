<?php
namespace Libs;

class View{
    public function __construct(){
        // echo("<p>vista principal</p>");
    }
    public function render($name){
        $file = 'views/' . $name . '.php';
        if(file_exists($file)){
            include_once('views/' . $name . '.php');
        }else{
            echo("<p>no existe el archivo $file</p>");
            print('<p>la url del archivo es: <b>'.__FILE__.'</b></p>');
        }
    }
    public function callFooter(){
        include_once('C:\xampp\htdocs\fg\inventario_site\v3-pendiente\views\partials\footer.php');
    }
}