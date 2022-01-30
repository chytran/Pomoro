<?php

Class HistoryModel
{

    function history($POST)
    {
        $DB = new Database();

        $_SESSION['error'] = "";
        if(isset($_SESSION['user_name']))
        //if(isset($POST['username']) && isset($POST['password'])) 
        {
                // array for holding exact values
            //$arr['history'] = $POST['history']; // run if value is in array and isset
            $query = "SELECT history FROM history";
            $data = $DB->read($query);
            if(is_array($data)) 
            {
                // logged in
                $_SESSION['history'] = $data[0]->history;


            } else {
                $_SESSION['history'] = 'No history found';
            }
        } else {
            $_SESSION['error'] = 'Transactions must be found in order to be displayed';
        }
        
    }

    /*function signup($POST)
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

        $arr['user_url'] = $POST['user_url'];
        if(isset($_SESSION['user_url'])) 
        {
            $query = "SELECT * FROM users where url_address = :user_url limit 1";
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
        header("Location:" . ROOT . "login");
        
    }

    function logout()
    {
        // logged out
        unset($_SESSION['user_name']);
        unset($_SESSION['url_url']);

        // header("location:" . ROOT . "signout");
        // exit();
        // die;
    }*/
}