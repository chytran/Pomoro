<?php

Class Login extends Controller
{
    function index()
    {
        $DB = new Database();
        $data = $DB->read("SELECT * FROM USERS"); // data holds everything from query
        $data['title_page'] = 'Pomoro - Login';
        
        $this->view("login", $data);
    }
}