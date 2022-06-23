<?php

class Dashboard extends Controller{

    public function __construct()
    {
        parent::__construct();
        $this->view->render('dashboard');
    }

    public function employees(){
        $this->model->getAllEmp();
    }
}