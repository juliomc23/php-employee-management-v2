<?php

//this file is for reference what all controller files must have

class Controller{

    public function __construct()
    {
        $this->view = new View;
    }

    function loadModel($model){

        $path = getcwd();

        $url = $path . '/src/models/' . $model . 'Model.php';


        if(file_exists($url)){
            require $url;

            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }

}