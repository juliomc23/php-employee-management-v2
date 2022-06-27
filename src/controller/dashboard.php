<?php

class Dashboard extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function renderView(){
        $this->view->render('dashboard');
    }

    public function employees(){
        $this->model->getAllEmp();
    }

    public function delete($params){
        $empId = $params[0];
        $this->model->deleteEmp($empId);
    }
}