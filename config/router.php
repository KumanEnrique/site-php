<?php
namespace Config;
use Config\Request;
class Router{
    static function run(Request $request){
        $controllerFile = 'C:\xampp\htdocs\fg\inventario_site\v3-pendiente\controllers\\'. $request->getController() . '.php';
        $controllerName = 'controllers\\' . $request->getController();
        if(file_exists($controllerFile)){
            $controller = new $controllerName();
            if(method_exists($controller,$request->getMethod()) ){
                $controller->loadModel($request->getController());
                $method = $request->getMethod();
                if(! empty($request->getArgument())){
                    $argument = $request->getArgument();
                    $controller->{$method}($argument[0]);
                }else{
                    $controller->{$method}();
                }
            }else{
                echo("<p>el metodo no existe</p>");
            }
        }else{
            echo("<p>el controlador no extiste $controllerName</p>");
        }
    }
}