<?php

class Employee extends Controller{

    public function __construct()
    {
        parent::__construct();
        $this->view->render('employee');
    }

    public function employee($id){
        echo "Getting Employees";
    }
}