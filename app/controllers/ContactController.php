<?php
namespace app\controllers;

use Jenssegers\Blade\Blade;

Class ContactController
{
    private $blade;

    public function __construct()
    {
        $this->blade = new Blade(dirname(__FILE__,2)."/views", dirname(__FILE__,2)."/cache");      
    }

    public function index()
    {
        echo $this->blade->render('contact');
        
    }

    public function store($request)
    {
        print_r($request);
    }

    public function upload($request, $file)
    {
        //pegando extensao
        $extension = pathinfo($file['file']['name'], PATHINFO_EXTENSION);

        $newName = "img";

        $storage = "$newName.$extension";

        //var_dump($storage );

        $result = move_uploaded_file($file['file']['tmp_name'], dirname(__FILE__,2)."/storage/$storage");

        if($result){
            echo "OK";
        }else{
            echo "falha";
        }
        
    }
}