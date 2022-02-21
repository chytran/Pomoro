<?php

class Logout extends Controller
{
    function index()
    {
        $user = $this->loadModel("user");
        $userTime = new User;
        $userTime->logout();
    }
    
}