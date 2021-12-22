<?php

Class Database 
{
    public function db_connect()
    {
        try {
            $string = "mysql:host=localhost;dbname=pomoro;";
            $db = new PDO($string, "root", '');
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