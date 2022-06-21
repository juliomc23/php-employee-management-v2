<?php
require_once './src/controller/errorController.php';

class Router{

    public $url;
    public $error;

    public function __construct()
    {
        $this->url = $_GET['url'];
        $this->url = rtrim($this->url, '/');
        $this->url = explode('/', $this->url);

        $this->getUrl();
    }

    public function getUrl(){
        $file = 'src/controller/' . $this->url[0] . '.php';
        

        if(file_exists($file)){
            require_once $file;
            $controller = new $this->url[0];

            if(isset($this->url[1])){
                $controller->{$this->url[1]}();
            }else{
                $controller = new ErrorFile($this->error = "method");
            }
        }else{
            $controller = new ErrorFile($this->error = "file");
        }
    }
}