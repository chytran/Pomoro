<?php

class Account extends Controller
{
    function index()
    {
        $DB = new Database();
        $data = $DB->read("SELECT * FROM USERS"); // data holds everything from query
        $data['title_page'] = 'Pomoro - Account';
        
        $this->view("account", $data);
    }

    function dashboard() {
        $DB = new Database();
        $data = $DB->read("SELECT * FROM USERS"); // data holds everything from query
        $data['title_page'] = 'Pomoro - Account';
        
        $this->view("accountDashboard", $data);
    }

    function card() {
        $DB = new Database();
        $data = $DB->read("SELECT * FROM USERS"); // data holds everything from query
        $data['title_page'] = 'Pomoro - Account Card';
        
        $this->view("accountCard", $data);
    }

    function cardRegister() {
        $DB = new Database();
        $data = $DB->read("SELECT * FROM USERS");
        $data['title_page'] = 'Pomoro Card Registration';

        $this->view("cardRegistration", $data);
    }
    
}