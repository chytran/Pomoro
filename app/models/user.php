<?php

Class User
{
    function login($POST)
    {
        $DB = new Database();

        $_SESSION['error'] = "";
        if(isset($POST['username']) && isset($POST['password'])) 
        {
                // array for holding exact values
            $arr['username'] = $POST['username']; // run if value is in array and isset
            $arr['password'] = $POST['password'];
            $query = "SELECT * FROM users where username = :username && password = :password limit 1";
            $data = $DB->read($query,$arr);
            if(is_array($data)) 
            {
                // logged in
                $_SESSION['user_id'] = $data[0]->userid;
                $_SESSION['user_name'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;
            } else {
                $_SESSION['error'] = 'Wrong username and password';
            }
        } else {
            $_SESSION['error'] = 'Please enter a valid username and password';
        }
        
    }

    function signup($POST)
    {
        // print("I Am here");
        $DB = new Database();

        $_SESSION['error'] = "";
        if(isset($POST['username']) && isset($POST['password'])) 
        {
                // array for holding exact values
            $arr['username'] = $POST['username']; // run if value is in array and isset
            $arr['password'] = $POST['password'];
            $arr['email'] = $POST['email'];
            $query = "INSERT INTO users (username, password, email) values (:username, :password, :email)";
            $data = $DB->write($query,$arr);
            if($data) 
            {
                header("Location:" . ROOT . "login");
                die;
            } 
        } else {
            $_SESSION['error'] = 'Please enter a valid username and password';
        }
        
    }

    function check_logged_in()
    {
        $DB = new Database();

        $arr['user_url'] = $POST['user_url'];
        if(isset($_SESSION['user_url'])) 
        {
            $query = "SELECT * FROM users where url_address = :url_url limit 1";
            $data = $DB->read($query,$arr);
            if(is_array($data)) 
            {
                // logged in
                $_SESSION['user_id'] = $data[0]->userid;
                $_SESSION['user_name'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;

                return true;
            }
        }
        return false;
    }
}