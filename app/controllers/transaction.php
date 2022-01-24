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

        // isset then add
        if(isset($_POST['transactionTime']) && isset($_POST['amount']) && isset($_POST['card'])) {
            if($_POST['transactionTime'] = 'withdraw') {
                $withdraw = $this->loadModel("account");
                $withdrawTime = new Account;
                $withdrawTime->withdrawNumbers($_POST);
            } else {
                $deposit = $this->loadModel("account");
                $depositTime = new Account;
                $depositTime->depositNumbers($_POST);
            }
        } else {
            // Error if necessary
        }
        // else subtract
        
        $this->view("accountTransaction", $data);
    }
    
}