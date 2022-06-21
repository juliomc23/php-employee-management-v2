<?php

class DashboardController extends Controller{

    public function __construct()
    {
        parent::__construct();
        $this->view->render('dashboard');
        echo "Employee controller";
    }
    
}