<?php

Class Account
{

    /*======================= CARD ===========================*/
    function registerCard($POST) 
    {
        print_r("I am here");
        print_r("I am an array");
        $DB = new Database();

        $_SESSION['error'] = "";
        if(isset($POST['email1']))
        {
            // Array for holding exact values
            $arr['email1'] = $POST['email1']; // run if value is in array and isset
            $arr['amount'] = 0; // Set account to have 0 initially
            $arr['creditCard'] = $POST['creditCard'];

            $query = "INSERT INTO account (email, amount, creditCard) values (:email1, :amount, :creditCard)";
            $data = $DB->write($query, $arr);
            if($data) 
            {
                header("Location:" . ROOT . "home");
                die;
            } else {
                $_SESSION['error'] = 'Please enter valid information to create an card';
            }
        }
    }

    function depositNumbers($POST) 
    {
        print_r("I am here");
        print_r("I am an array");
        $DB = new Database();

        $_SESSION['error'] = "";
        if(isset($POST['email1']))
        {
            // Array for holding exact values
            $arr['email1'] = $POST['email1']; // run if value is in array and isset
            $arr['amount'] = 0; // Set account to have 0 initially
            $arr['creditCard'] = $POST['creditCard'];

            $query = "INSERT INTO account (email, amount, creditCard) values (:email1, :amount, :creditCard)";
            $data = $DB->write($query, $arr);
            if($data) 
            {
                header("Location:" . ROOT . "home");
                die;
            } else {
                $_SESSION['error'] = 'Please enter valid information to create an card';
            }
        }
    }

    function getCard()
    {
        $DB = new Database();

        $arr['user_email'] = $POST['email'];
        if(isset($_SESSION['user_email'])) 
        {
            $query = "SELECT * FROM account where email = :user_email";
            $data = $DB->read($query,$arr);
            if(is_array($data)) 
            {
                // logged in
                $_SESSION['user_id'] = $data[0]->userid;
                $_SESSION['user_email'] = $data[0]->email;
                $_SESSION['user_amount'] = $data[0]->amount;
                $_SESSION['user_creditCard'] = $data[0]->creditCard;

                return true;
            }
        }
        return false;
        header("Location:" . ROOT . "login");
        
    }


    function historyPush($POST) 
    {
        $DB = new Database();

        $_SESSION['error'] = "";
        if(isset($POST['email1']))
        {
            // Array for holding exact values
            $arr['email2'] = $POST['email1']; // run if value is in array and isset
            $arr['history'] = date("Y-m-d H:i:s");
            $arr['message'] = $POST['email1'] . " has created a new " . $POST['creditCard'] . " card";

            $query = "INSERT INTO history (email, history, message) values (:email2, :history, :message)";
            $data = $DB->write($query, $arr);
            if($data) 
            {

            } else {
                $_SESSION['error'] = 'Please enter valid information to create an card';
            }
        }
    }

    function get_all()
    {
        $query = "SELECT * FROM account";

        $DB = new Database();
        $data = $DB->read($query);
        if(is_array($data))
        {
            return $data;
        }
        return false;
    }
}