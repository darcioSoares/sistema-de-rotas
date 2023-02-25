<?php

function load(string $controller, string $action)
{
    //se controller existe
    $controllerNamespace = "app\\controllers\\{$controller}";

    if(!class_exists($controllerNamespace))
    {
        throw new Exception("O controller $controller não existe");
    }

    $controllerInstance = new $controllerNamespace();

    if(!method_exists($controllerInstance, $action))
    {
        throw new Exception("O metodo $action não existe no controller $controller");
    }

    $controllerInstance->$action();

}//end load

$routers = [
    'GET' => [
        "/" => load("HomeController", "index"),
        "/contact" => load("ContactController", "index")
    ],
    'POST' => [
        "/contact" => load("ContactController", "store"),
    ],
];


