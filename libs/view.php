<?php

//this file is for reference what all view files must have

class View{

    public function __construct()
    {
        
    }

    public function render($view){
        $path = getcwd();
        $fullpath = $path .'/' . 'src/' . 'view/' . $view . 'View.php';
        require $fullpath;
    }
}