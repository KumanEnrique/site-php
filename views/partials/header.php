<?php
define("URL_HOME","http://localhost:8080/fg/inventario_site/v3-pendiente/");
$HTML_head = '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/superhero/bootstrap.min.css">
    <title>inventario</title>
</head>
<body>
    <h3>mi inventario site version 3</h3>
';
$HTML_navbar = '
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="%s">Inventario</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="%s">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="%sorder/">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="%srequest/">Request</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="%sdepartaments/">Departaments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="%susers/">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="%semployees/">Employees</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Usuario
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                                <li><a class="dropdown-item" href="#">cerrar sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="container">
';
printf($HTML_head);
printf($HTML_navbar,
    URL_HOME,//brand
    URL_HOME,//inicio
    URL_HOME,//orden
    URL_HOME,//solicitud
    URL_HOME,//departamentos
    URL_HOME,//usuarios
    URL_HOME);//trabajadores

/* if(isset($_GET['url'])){
    $url = $_GET['url'];
    $url = explode('/',$url);
    if(in_array('orden',$url)){
        printf($HTML_navbar,
    URL_HOME,//brand
    "",
    URL_HOME,//inicio
    "active",
    URL_HOME,//orden
    "",
    URL_HOME,//solicitud
    "",
    URL_HOME,//departamentos
    "",
    URL_HOME,//usuarios
    "",
    URL_HOME);//trabajadores
    }
    if(in_array('solicitud',$url)){
        printf($HTML_navbar,
    URL_HOME,//brand
    "",
    URL_HOME,//inicio
    "",
    URL_HOME,//orden
    "active",
    URL_HOME,//solicitud
    "",
    URL_HOME,//departamentos
    "",
    URL_HOME,//usuarios
    "",
    URL_HOME);//trabajadores
    }
    if(in_array('departamentos',$url)){
        printf($HTML_navbar,
    URL_HOME,//brand
    "",
    URL_HOME,//inicio
    "",
    URL_HOME,//orden
    "",
    URL_HOME,//solicitud
    "active",
    URL_HOME,//departamentos
    "",
    URL_HOME,//usuarios
    "",
    URL_HOME);//trabajadores
    }
    if(in_array('usuarios',$url)){
        printf($HTML_navbar,
    URL_HOME,//brand
    "",
    URL_HOME,//inicio
    "",
    URL_HOME,//orden
    "",
    URL_HOME,//solicitud
    "",
    URL_HOME,//departamentos
    "active",
    URL_HOME,//usuarios
    "",
    URL_HOME);//trabajadores
    }
    if(in_array('trabajadores',$url)){
        printf($HTML_navbar,
    URL_HOME,//brand
    "",
    URL_HOME,//inicio
    "",
    URL_HOME,//orden
    "",
    URL_HOME,//solicitud
    "",
    URL_HOME,//departamentos
    "",
    URL_HOME,//usuarios
    "active",
    URL_HOME);//trabajadores
    }
}else{
    printf($HTML_navbar,
    URL_HOME,//brand
    "active",
    URL_HOME,
    "",//inicio
    URL_HOME,
    "",//orden
    URL_HOME,
    "",//solicitud
    URL_HOME,
    "",//departamentos
    URL_HOME,
    "",//usuarios
    URL_HOME);//trabajadores
} */