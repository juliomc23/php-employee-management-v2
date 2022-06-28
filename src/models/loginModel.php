<?php

class loginModel extends Model{

    public $queryEmail;
    public $queryPassword;
    public $postEmail;
    public $postPassword;

    public function __construct()
    {
        parent::__construct();
    }

    public function login($user){
        //Aqui se iniciaría la sesión comprobando usuario ded la bd
        $query = $this->db->connect()->prepare('SELECT * FROM admin');

    
        try{
            $query->execute();
            $employees = $query->fetchAll();

            $this->postEmail = $user['email'];
            $this->postPassword = $user['password'];

            $this->queryEmail = $employees[0]['email'];
            $this->queryPassword = $employees[0]['password'];

            if($this->postEmail === $this->queryEmail && password_verify($this->postPassword, $this->queryPassword)){
                session_start();
                $_SESSION['name'] = $employees[0]['first_name'];
                header('Location:' . BASE_URL .'dashboard');
            }else{
                header('Location:' . BASE_URL .'login');
            }
        }catch(PDOException $e){
            return $e;
        }

    }
}