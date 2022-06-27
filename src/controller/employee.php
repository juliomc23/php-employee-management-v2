<?php

class Employee extends Controller{

    public function __construct()
    {
        parent::__construct();
        // $this->view->render('employee');
    }
    public function renderView(){
        $this->view->render('employee');
    }

    public function getAllEmployees()
    {
        try {
            $employeeList = $this->model->getAll();
            echo json_encode($employeeList);
            http_response_code(200);
        } catch (Throwable $th) {
            http_response_code(400);
            echo json_encode(['message' => $th->getMessage()]);
        }
    }

    public function createEmployee()
    {
        try {
            $employeeCreated = $this->model->create($_POST);
            http_response_code(200);
            echo json_encode(['message' =>  "employee {$_POST['name']} created"]);
        } catch (\Throwable $th) {
            http_response_code(400);
            echo json_encode(['message' => $th->getMessage()]);
        }
    }

    public function employee($params){
        $empId = $params[0];
        $employee = $this->model->getEmpById($empId);
        
        $this->view->employee = $employee;
        $this->view->render('employee');
    }

}