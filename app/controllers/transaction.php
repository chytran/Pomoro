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
        if(isset($_POST['creditCardChange']) && isset($_POST['depOrWith']) && isset($_POST['amountChange'])) {
            print_r("This works");
            
            if($_POST['depOrWith'] = 'withdraw') {
                print_r("This is a withdraw");
                // $accountTime->depositNumbers($_POST);
            } else {
                print_r("This is a deposit");
            //     // $accountTime->depositNumbers($_POST);
            }
        } else {
            // Error if necessary
        }
        // else subtract
        
        $this->view("accountTransaction", $data);
    }
    
}