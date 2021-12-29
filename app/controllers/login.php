<?php

Class Login extends Controller
{
    function index()
    {
        // $DB = new Database();
        // $data = $DB->read("SELECT * FROM USERS"); // data holds everything from query
        $data['title_page'] = 'Pomoro - Login';
        
        if(isset($_POST['email']))
        {
            $user = $this->loadModel("user");
            $user->signup($_POST);
        } else if(isset($_POST['username']) && !isset($_POST['email'])) {
            $user = $this->loadModel("user");
            $user->login($_POST);
        }

        $this->view("login", $data);
    }
}