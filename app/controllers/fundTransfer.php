<?php

class FundTransfer extends Controller
{
    function index()
    {
        $DB = new Database();
        $data = $DB->read("SELECT * FROM USERS"); // data holds everything from query
        $data['title_page'] = 'Pomoro - Fund Transfer';
        
        $this->view("accountFundTransfer", $data);
    }
}