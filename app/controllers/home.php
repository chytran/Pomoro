<?php

class Home extends Controller
{
    function index()
    {
        $DB = new Database();
        $DB->connect();
        $this->view("home");
    }
    
}