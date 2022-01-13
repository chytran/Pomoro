<?php

Class Account
{
    function registerCard($POST) 
    {
        $DB = new Database();

        $_SESSION['error'] = "";
        if(isset($POST['username']))
        {
            // Array for holding exact values
            $arr['username'] = $POST['username']; // run if value is in array and isset
            $arr['email'] = $POST['email'];
            $arr[];
        }
    }
}