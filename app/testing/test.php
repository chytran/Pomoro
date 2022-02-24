<?php

// Testing for login confirmation
Class Testing
{

    /*================== Register ==========================*/
    function testLogin($POST) 
    {
        $DB = new Database();

        $_SESSION['error'] = '';

        if(isset($POST['username']) && isset($POST['password']))
        {
            print_r("Login Successful");
        } else {
            $_SESSION['error'] = "login test failed";
        }
    }
}