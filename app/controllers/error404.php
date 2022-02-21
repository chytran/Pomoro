<?php

Class Error404 extends Controller
{
    function index()
    {
        $DB = new Database();
        $data = $DB->read("SELECT * FROM USERS"); // data holds everything from query
        $data['title_page'] = 'Pomoro - Home';
        
        $this->view("error", $data);
    }

}