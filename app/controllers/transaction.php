<?php

class Transaction extends Controller
{
    function index()
    {
        $data['title_page'] = 'Pomoro - Transaction';

        // Calling the models
        $account = $this->loadModel("account");
        $history = $this->loadModel("historyModel");

        $accountTime = new Account;
        $result = $accountTime->get_all();


        // Data for cards
        $data['cards'] = $result;
        
        
        if(isset($_POST['depositOrWithdraw'])) {
            $depOrWithTime = new Account;
            $historyTime = new historyModel;
            
            // Fill history function here
            $depOrWithTime->depositOrWithdraw($_POST);
            $historyTime->depositFunction($_POST);
            // $historyPush = $historyTime-> //function from historymodel     
        }
        

        $this->view("accountTransaction", $data);
    }
    
}