<?php

class Card extends Controller
{
    function index()
    {
        $data['title_page'] = 'Pomoro - Cards';

        $account = $this->loadModel("account");
        $accountTime = new Account;
        $result = $accountTime->get_all();

        // $user = $this->loadModel("user");
        // $userLogin = new User;
        // $checkUserLogin = $userLogin->check_logged_in();

        $data['posts'] = $result;
        // $array = json_decode(json_encode($data), true);
        // $data = json_decode(json_encode($data), true);
        $this->view("accountCard", $data);
    } 
}