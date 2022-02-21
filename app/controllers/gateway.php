<?php

class Gateway extends Controller
{
    function index()
    {
        // $DB = new Database();
        // $data = $DB->read("SELECT * FROM USERS"); // data holds everything from query
        $data['title_page'] = 'Pomoro - Home';
        
        $this->view("gateway", $data);
    }
    
}