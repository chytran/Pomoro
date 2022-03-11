<?php

Class checkOut extends Controller
{
    function index()
    {
        $DB = new Database();
        $data = $DB->read("SELECT * FROM USERS"); // data holds everything from query
        $data['title_page'] = 'Pomoro - (Change my Title Name)"';
        
        // Call checkout function from account model
        
        // History display purchase has happened

        $this->view("checkout", $data);
    }

}