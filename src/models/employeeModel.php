<?php

class employeeModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function deleteEmp(){
        echo "Usuario deleteado";
    }

    public function getAll()
    {
        try {
            $query = $this->db->connect()->query("SELECT * FROM EMPLOYEES");
            // $query -> execute();

            $employees = [];

            while ($row=$query->fetch(PDO::FETCH_ASSOC)) {
                    $employees[] = [
                        'id' => $row['id'],
                        'name' => $row['name'],
                        'lastname' => $row['last_name'],
                        'email' => $row['email'],
                        'gender' => $row['gender'],
                        'age' => $row['age'],
                        'address' => $row['street_address'],
                        'city' => $row['city'],
                        'state' => $row['state'],
                        'postalCode' => $row['postal_code'],
                        'phoneNumber' => $row['phone_number']
                    ];
            }


            return $employees;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function create($data)
    {
        try {
            $age = (int)$data['age'];
            $postalCode = (int)$data['age'];
            $gender = isset($data['gender']) ? $data['gender'] : '';
            $lastName = isset($data['lastName']) ? $data['lastName'] : '';

            $this->db->connect()->query("INSERT INTO employees 
            (name, last_name, email, gender, age, street_address, city, state, postal_code, phone_number) 
            VALUES 
            ('{$data['name']}', 
            '$lastName', 
            '{$data['email']}', 
            '$gender', 
            '$age', 
            '{$data['streetAddress']}', 
            '{$data['city']}', 
            '{$data['state']}', 
            '$postalCode', 
            '{$data['phoneNumber']}' )");

            return true;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
    public function getEmpById($id){
        $query = $this->db->connect()->prepare('SELECT * from employees WHERE id = :id');
        $query->bindParam(':id', $id);
    
        try {
            $query->execute();
            $employees = $query->fetch();
    
            return $employees;
        } catch (PDOException $e) {
            var_dump($e);
        }
    }

    public function update($employee){
        var_dump($employee);

        $query = $this->db->connect()->prepare("UPDATE employees SET name=:name,last_name=:last_name,email=:email,gender=:gender,age=:age,street_address=:street_address,city=:city,state=:state,postal_code=:postal_code,phone_number=:phone_number WHERE id = :id");
        // $query = createConnection()->prepare("UPDATE employees SET birth_date=:birth_date,first_name=:first_name,last_name=:last_name,gender=:gender,hire_date=:hire_date WHERE emp_no=:emp_no");
        
        $query->bindParam(":name", $employee['name']);
        $query->bindParam(":last_name", $employee['lastName']);
        $query->bindParam(":email", $employee['email']);
        $query->bindParam(":gender", $employee['gender']);
        $query->bindParam(":age", $employee['age']);
        $query->bindParam(":street_address", $employee['streetAddress']);
        $query->bindParam(":city", $employee['city']);
        $query->bindParam(":state", $employee['state']);
        $query->bindParam(":postal_code", $employee['postalCode']);
        $query->bindParam(":phone_number", $employee['phoneNumber']);
        $query->bindParam(":id", $employee['id']);

        try {
            $query->execute();
            return[true];
        } catch (PDOException $e) {
            var_dump($e);
        }
    }
}