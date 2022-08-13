<?php
namespace Controllers;

use libs\Controller;

class Main extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function main(){
        $this->view->render('main/index');
        $this->view->callFooter();
    }
}