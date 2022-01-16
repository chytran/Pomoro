<?php

class Account extends Controller
{
    function index()
    {
        $DB = new Database();
        $data = $DB->read("SELECT * FROM USERS"); // data holds everything from query
        $data['title_page'] = 'Pomoro - Account';
        
        $this->view("accountDashboard", $data);
    }

    function dashboard() {
        $DB = new Database();
        $data = $DB->read("SELECT * FROM USERS"); // data holds everything from query
        $data['title_page'] = 'Pomoro - Account';
        
        $this->view("accountDashboard", $data);
    }

    function history() {
        $DB = new Database();
        $data = $DB->read("SELECT * FROM USERS"); // data holds everything from query
        $data['title_page'] = 'Pomoro - Account';
        
        $this->view("accountHistory", $data);
    }
    
}