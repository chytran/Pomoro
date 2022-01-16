<?php

Class CardRegistration extends Controller
{
    function index() 
    {
        $data['title_page'] = 'Pomoro - Card Registration';

        if(isset($_POST['email1']))
        {
            $user = $this->loadModel("account");
            $userTime = new Account;
            $userTime->registerCard($_POST);
        }
        $this->view("cardRegistration", $data);
    }
}