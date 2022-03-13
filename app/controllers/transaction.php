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
            $historyTime = new HistoryModel;
            
            // Fill history function here
            $historyTime->depositFunction($_POST);
            $depOrWithTime->depositOrWithdraw($_POST);
            // $historyPush = $historyTime-> //function from historymodel     
        }
        

        $this->view("accountTransaction", $data);
    }
    
}