<?php

Class shoppingCart extends Controller
{
    function index()
    {
        $DB = new Database();
        $data = $DB->read("SELECT * FROM USERS"); // data holds everything from query
        $data['title_page'] = 'Pomoro - Shopping Cart';
        
        $this->view("shoppingCart", $data);
    }

}