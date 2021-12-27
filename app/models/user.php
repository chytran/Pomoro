<?php

Class User
{
    function login()
    {
        $DB = new Database();

        if(isset($POST['username']) && isset($POST['password']))
        $query = "SELECT * FROM users where username = :username && password = :password limit 1";
        $DB->write($query,$arr);
    }

    function signup()
    {

    }


}