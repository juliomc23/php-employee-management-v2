<?php

class Login extends Controller{

    public function __construct()
    {
        parent::__construct();
    }


    public function renderView(){
        $this->view->render('login');
    }

    function login(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = ['email'=> $email, 'password' => $password];

        $this->model->login($user);
    }

}