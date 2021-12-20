<?php

class Home 
{
    function index()
    {
        $this->view("home");
    }
    
    function view($view) 
    {
        if(file_exists("../app/controllers/" . $view . ".php")) // if file in controller exist
        {
            include "../app/views/" . $view . ".php";
        }
    }
}