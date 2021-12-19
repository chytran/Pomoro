<?php

class App
{
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