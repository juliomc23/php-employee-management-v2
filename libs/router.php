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
            $controller->loadModel('login');
            return false;
        }
            $file = 'src/controller/' . $url[0] . '.php';

            if(file_exists($file)){
                require_once $file;
                $controller = new $url[0];
                $controller->loadModel($url[0]);
    
                $nparam = sizeof($url);
    
                if($nparam > 1){
                    if($nparam > 2){
                        $params = [];
                        for($i = 2; $i<$nparam; $i++){
                            array_push($params, $url[$i]);
                        }
                        $controller->{$url[1]}($params);
                    }else{
                        $controller->{$url[1]}();
                    }
                }else{
                    $controller->renderView();
                }
    
            }else{
                require_once './src/controller/error.php';
                $controller = new ErrorFile();
            }

    }
}