<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/HomeController.php',
    '/UserData' => 'controllers/UserDataController.php',
    '/Registration' => 'controllers/RegistrationController.php',
    '/ReadID' => 'controllers/ReadIDController.php',
    "/editUser" => 'controllers/editController.php',
    "/deleteUser" => 'controllers/deleteController.php',
    "/History" => 'controllers/historyController.php'

];

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)){
        require $routes[$uri];
    } else{
        abort();
    }
}

function abort($code = 404 ){
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);
