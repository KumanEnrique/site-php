<?php
namespace Config;

class Request{
    private $controller;
    private $metod;
    private $argument;
    public function __construct(){
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $url = explode('/',$url);
            // print("<pre>");
            // print_r($url);
            // print("</pre>");
            $this->controller = array_shift($url);
            $this->method = array_shift($url);
            if($this->method == false){
                $this->method = 'main';
            }
            $this->argument = $url;
        }else{
            $this->controller = 'Main';
            $this->method = 'main';
        }
    }
    public function getController(){
        return $this->controller;
    }
    public function getMethod(){
        return $this->method;
    }
    public function getArgument(){
        return $this->argument;
    }
}