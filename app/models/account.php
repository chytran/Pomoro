<?php

Class Account
{
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

    function historyPull() {
        $DB = new Database();

        $_SESSION['error'] = '';

    }
}