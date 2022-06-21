<?php

class EmployeeController extends Controller{

    public function __construct()
    {
        parent::__construct();
        $this->view->render('employee');
        echo "Employee controller";
    }

    public function getEmployee(){
        echo "Getting Employees";
    }
}