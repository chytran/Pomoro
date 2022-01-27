<?php

Class ecommerceHome extends Controller
{
    function index()
    {
        $DB = new Database();
        $data = $DB->read("SELECT * FROM USERS, CATEGORY, PRODUCT"); // data holds everything from query
        $data['title_page'] = 'Pomoro Commerce';
        
        $this->view("ecommerceHome", $data);
    }

}