<?php

Class changeMyName extends Controller
{
    function index()
    {
        $DB = new Database();
        $data = $DB->read("SELECT * FROM USERS"); // data holds everything from query
        $data['title_page'] = 'Pomoro - (Change my Title Name)"';
        
        $this->view("changeMyName", $data);
    }

}