<?php


class Router{


    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if($url[0] == ''){
            $file = 'src/controller/login.php';
            require_once $file;
            $controller = new Login();
            return false;
        }
            $file = 'src/controller/' . $url[0] . '.php';

        if(file_exists($file)){
            require_once $file;
            $controller = new $url[0];

            if(isset($url[1])){
                $controller->{$url[1]}();
            }
        }else{
            require_once './src/controller/error.php';
            $controller = new ErrorFile();
        }
    }

    public function getUrl(){
        
    }
}