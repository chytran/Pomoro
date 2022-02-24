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

            // Test
            $this->loadTest("test");
            $testTime = new Testing;
            $testTime->testLogin($_POST);

            // User model call
            $userTime = new User;
            $userTime->signup($_POST);
        } else if(isset($_POST['username']) && !isset($_POST['email'])) {

            $user = $this->loadModel("user");

            // Test
            $this->loadTest("test");
            $testTime = new Testing;
            $testTime->testLogin($_POST);

            // User model call
            $userTime = new User;
            $userTime->login($_POST);
        }

        $this->view("login", $data);
    }
}