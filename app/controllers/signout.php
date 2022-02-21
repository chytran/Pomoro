<?php

Class Signout extends Controller
{
    function index()
    {
        $DB = new Database();
        $data = $DB->read("SELECT * FROM USERS"); // data holds everything from query
        $data['title_page'] = 'Pomoro - Signout';
        

        $user = $this->loadModel("user");
        $userTime = new User;
        $userTime->logout();

        $this->view("signout", $data);
    }

}