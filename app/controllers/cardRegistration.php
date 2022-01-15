<?php

Class CardRegistration extends Controller
{
    function index() 
    {
        $data['title_page'] = 'Pomoro - Card Registration';

        if(isset($_POST['email'])
        {
            if(is_array($_POST)) {
                var_dump($_POST);
                if(!$_POST == null) {
                    $account = $this->loadModel("account");
                    $accountTime = new Account;
                    $accountTime->registerCard($_POST);
                }
            }
        } 
        $this->view("cardRegistration", $data);
    }
}