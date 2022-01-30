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
        
        
        if(isset($_POST['depositOrWithdraw'])) {
            $depOrWithTime = new Account;
            // History code
            $depOrWithTime->depositOrWithdraw($_POST);
        }
        

        $this->view("accountTransaction", $data);
    }
    
}