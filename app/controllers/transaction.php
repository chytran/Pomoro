<?php

class Transaction extends Controller
{
    function index()
    {
        $data['title_page'] = 'Pomoro - Transaction';

        $account = $this->loadModel("account");
        $accountTime = new Account;
        $result = $accountTime->get_all();

        // Data for cards
        $data['cards'] = $result;
        
        if(isset($_POST['depOrWith'])) {
            $depOrWithTime = new Account;
            $depOrWithTime->depositOrWithdraw($_POST);
        }
        

        $this->view("accountTransaction", $data);
    }
    
}