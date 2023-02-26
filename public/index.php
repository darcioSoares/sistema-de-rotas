<?php
require '../vendor/autoload.php';
require '../routers/router.php';


try{

    $uri = parse_url($_SERVER["REQUEST_URI"])['path'];
    $request = $_SERVER["REQUEST_METHOD"];

    if(!isset($router['$request']))
    {
        throw new Exception( 'A Rota não Existe');
    }

    if(!array_key_exists($uri, $router[$request]))
    {
        throw new Exception( 'A Rota não Existe');
    }

    $router[$request][$uri];

}catch(Exception $e){
    $e->getMessage();
} 