<?php

class Card extends Controller
{
    function index()
    {
        $DB = new Database();
        $data = $DB->read("SELECT * FROM account"); // data holds everything from query
        $data['title_page'] = 'Pomoro - Cards';
        
        $array = json_decode(json_encode($data), true);
        // $data = json_decode(json_encode($data), true);
        $this->view("accountCard", $data);
    }
    
}