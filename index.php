<?php

use Config\Autoload;

include_once('./config/autoload.php');
Autoload::run();
use Config\Request;
use Config\Router;
Router::run(new Request());