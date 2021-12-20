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
        print_r($url);
    }

    private function splitURL()
    {
        return explode("/", filter_var(trim($_GET['url'], "/"), FILTER_SANITIZE_URL));
    }
}