<?php

Class Database 
{
    public function db_connect()
    {
        try {
            $string = DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";";
            $db = new PDO($string, DB_USER, DB_PASS);
            show($db);
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    private function read($query, $data = [])
    {

    }

    private function write($query, $data = [])
    {

    }
}