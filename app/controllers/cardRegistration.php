<?php

Class CardRegistration extends Controller
{
    function index() 
    {
        $data['title_page'] = 'Pomoro - Card Registration';

        if(isset($_POST['email3']))
        {
            $user = $this->loadModel("account");
            $userTime = new Account;
            $result = $userTime->historyPush($_POST);
            $userTime->registerCard($_POST);
            
        }
        $this->view("cardRegistration", $data);
    }
}