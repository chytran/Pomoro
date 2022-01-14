<?php

Class Account
{
    function registerCard($POST) 
    {
        $DB = new Database();

        $_SESSION['error'] = "";
        if(isset($POST['email']))
        {
            // Array for holding exact values
            $arr['email'] = $POST['email']; // run if value is in array and isset
            $arr['amount'] = 0;
            $arr['creditCard'] = $POST['creditCard'];

            $query = "INSERT INTO account (email, amount, creditCard) values (:email, :amount, :creditCard)";
            $data = $DB->write($query, $arr);
            if($data) 
            {
                header("Location:" . ROOT . "account/card");
                die;
            } else {
                $_SESSION['error'] = 'Please enter valid information to create an card';
            }
        }
    }
}