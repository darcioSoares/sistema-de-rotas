<?php

function load(string $controller, string $action)
{

    try{
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
        
    }catch(Exception $e)
    {
        echo $e->getMessage();
    }


}//end load

$router = [
    'GET' => [
        "/" => load("HomeController", "index"),
        "/contact" => load("ContactController", "index")
    ],
    'POST' => [
        "/contact" => load("ContactController", "store"),
    ],
];


