<?php

Class Database 
{
    public function db_connect()
    {
        // define("DB_TYPE", 'mysql');
        // define("DB_NAME", 'pomoro');
        // define("DB_USER", 'root');
        // define("DB_PASS", '');
        // define("DB_HOST", 'localhost');
        // $DB_TYPE = 'mysql';
        // $DB_NAME = 'u459263179_pomoro';
        // $DB_USER = 'u459263179_user';
        // $DB_PASS = 'Kimwipes1@';
        // $DB_HOST = 'localhost';
        try {
            $string = DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";";
            return $db = new PDO($string, DB_USER, DB_PASS);
            show($db);
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function read($query, $data = [])
    {
        $DB = $this->db_connect(); // connect to database
        $stmt = $DB->prepare($query); // hold a statement from the query

        if(count($data) == 0) { // if data array has nothing, call query
            $stmt = $DB->query($query);
            $check = 0;
            if($stmt){
                $check = 1;
            }
        } else {
            $check = $stmt->execute($data); // execute arrays of data
        }
        
        if($check)
        {
           $data = $stmt->fetchAll(PDO::FETCH_OBJ);
           if(is_array($data) && count($data) > 0)
           {
               return $data;
           }
           return false;
        } else {
            return false;
        }
    }

    public function write($query, $data = [])
    {
        $DB = $this->db_connect(); // connect to database
        $stmt = $DB->prepare($query); // hold a statement from the query

        if(count($data) == 0) { // if data array has nothing, call query
            $stmt = $DB->query($query);
            $check = 0;
            if($stmt){
                $check = 1;
            }
        } else {
            $check = $stmt->execute($data); // execute arrays of data
        }
        
        if($check)
        {
            return true;
        } else {
            return false;
        }
    }
}