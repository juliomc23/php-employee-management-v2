<?php

class ErrorFile{

    public function __construct($error)
    {
        if($error == 'file'){
            echo "The file doesn't exist";
        }else if($error == 'method'){
            echo "The method doesn't exist";
        }
    }
}