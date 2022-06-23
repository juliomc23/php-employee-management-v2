<?php

class Connection{

    public function connect(){

        try {
            $connection = "mysql:host=localhost;dbname=e_management;charset=utf8";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            
            $pdo = new PDO($connection, 'root', '', $options);


            return $pdo;
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }

}