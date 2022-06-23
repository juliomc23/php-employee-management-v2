<?php

class employeeModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function deleteEmp(){
        echo "Usuario deleteado";
    }
}