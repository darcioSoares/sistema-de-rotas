<?php
namespace app\controllers;

use Jenssegers\Blade\Blade;

Class HomeController
{
    private $blade;

    public function __construct()
    {
        $this->blade = new Blade(dirname(__FILE__,2)."/views", dirname(__FILE__,2)."/cache");      
    }

    public function index()
    {
        echo $this->blade->render('home');
     
    }
}