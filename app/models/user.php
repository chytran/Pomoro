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
                $_SESSION['user_name1'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;
                $_SESSION['email'] = $data[0]->email;

                header("Location:" . ROOT . "homepage2");
                die;
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
            $arr['url_address'] = get_random_string_max(60);
            $arr['date'] = date("Y-m-d H:i:s");
            
            $query = "INSERT INTO users (username, password, email, url_address, date) values (:username, :password, :email, :url_address, :date)";
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

        // $arr['user_url'] = $POST['user_url'];
        
        if(!isset($_SESSION['user_url'])) 
        {
            $query = "SELECT * FROM users where url_address = :user_url limit 1";
            $data = $DB->read($query,$arr);
            if(is_array($data)) 
            {
                // logged in
                $_SESSION['user_id'] = $data[0]->userid;
                $_SESSION['user_name'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;
                $_SESSION['email'] = $data[0]->email;

                return true;
            }
        }
        return false;
        header("Location:" . ROOT . "login");
        
    }

    function logout()
    {
        // logged out
        unset($_SESSION['user_name1']);
        unset($_SESSION['url_url']);
        unset($_SESSION['email']);

        // header("location:" . ROOT . "signout");
        // exit();
        // die;
    }
}