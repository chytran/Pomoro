<?php

class Home extends Controller
{
    function index()
    {
        $DB = new Database();
        $DB->db_connect();
        $this->view("home");
    }
    
}