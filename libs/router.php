<?php
require_once './src/controller/errorController.php';

class Router{


    public function __construct()
    {
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        $file = 'src/controller/' . $url[0] . '.php';
        

        if(file_exists($file)){
            require_once $file;
            $controller = new $url[0];

            if(isset($url[1])){
                $controller->{$url[1]}();
            }
        }else{
            $controller = new ErrorFile();
        }
    }

    public function getUrl(){
        
    }
}