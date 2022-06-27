<?php

class dashboardModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllEmp(){
        $query = $this->db->connect()->prepare('SELECT * from employees');


        try {
            $query->execute();
            $employees = $query->fetchAll();

            print_r(json_encode($employees));
        } catch (PDOException $e) {
            var_dump($e);
        }
    }

    public function deleteEmp($id){
        $query = $this->db->connect()->prepare('DELETE from employees WHERE id = :id');
        $query->bindParam(':id', $id);
    
        try {
            $query->execute();
        } catch (PDOException $e) {
            var_dump($e);
        }
    }
    
}

