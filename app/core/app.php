<?php

class App
{   
    // url/$controller/$method/params
    private $controller = "home"; // go to controllers/home.php
    private $method = "index"; // default method
    private $params = []; // store extra params

    public function __construct()
    {
        // $this->splitURL();
        // echo "hello";
        $url = $this->splitURL();
        // print_r($url); 

        if(file_exists("../app/controllers/" . strtolower($url[0]) . ".php")) // if file in controller exist
        {
            $this->controller = strtolower($url[0]); // set controller variable to what the 1st param is in url
            unset($url[0]); //unset itself from the array
        }

        require "../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller; // create new class based on url        

        if (isset($url[1])) // if method exists
        {
            if(method_exists($this->controller, $url[1])) //look into controller and check method
            {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // run the class and method together
        $this->params = array_values($url);
        show($this->params);
        // call_user_func_array([$this->controller, $this->method],$this->param);
    }

    

    private function splitURL()
    {
        return explode("/", filter_var(trim($_GET['url'], "/"), FILTER_SANITIZE_URL));
    }
}