<?php

class Employee extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function renderView(){
        $this->view->render('employee');
    }

    public function employee($id){
        echo "Getting Employee";
    }
}