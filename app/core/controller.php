<?php

Class Controller 
{
    function view($view, $data = [])
    {
        if(file_exists("../app/views/". $view . ".php"))
        {
            include "../app/views/" . $view . ".php";
        }else{
            include "../app/views/404.php";
        }
    }

    function loadModel($model)
    {
        if(file_exists("../app/models/". $model . ".php"))
        {
            include "../app/models/" . $model . ".php";
        }else{
            include "../app/views/404.php";
        }
    }
}