<?php

Class Controller 
{
    function view($view, $data = [])
    {
        if(file_exists("../app/views/". $view . ".php"))
        {
            include "../app/views/" . $view . ".php";
        }else{
            include "../app/views/error.php";
        }
    }

    function loadModel($model)
    {
        if(file_exists("../app/models/". $model . ".php"))
        {
            include "../app/models/" . $model . ".php";
            print_r("");
        }else{
            include "../app/views/error.php";
        }
    }

    function loadTest($test)
    {
        if(file_exists("../app/testing/" . $test . ".php"))
        {
            include "../app/testing/" . $test . ".php";
            print_r("");
        } else {
            include "../app/views/error.php";
        }
    }
}