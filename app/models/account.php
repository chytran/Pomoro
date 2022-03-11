<?php

Class Account
{

    /*======================= CARD ===========================*/
    function registerCard($POST) 
    {
        print_r("I am here");
        print_r("I am an array");
        $DB = new Database();

        $_SESSION['error'] = "";
        if(isset($POST['email3']))
        {
            // Array for holding exact values
            $arr['email3'] = $POST['email3']; // run if value is in array and isset
            $arr['amount'] = 0; // Set account to have 0 initially
            $arr['creditCard'] = $POST['creditCard'];

            $query = "INSERT INTO account (email, amount, creditCard) values (:email3, :amount, :creditCard)";
            $data = $DB->write($query, $arr);
            if($data) 
            {
                header("Location:" . ROOT . "account");
                die;
            } else {
                $_SESSION['error'] = 'Please enter valid information to create an card';
            }
        }
    }

    function depositOrWithdraw($POST) 
    {
        print_r("I am here");
        print_r("I am an array");
        $DB = new Database();

        $_SESSION['error'] = "";
        if(isset($POST['depositOrWithdraw']))
        {
            // list($creditCardChange, $creditCardID) = explode("_", $_POST['creditCardChange'], 2);
            
                // Array for holding exact values
                $arr['creditCardChange'] = $POST['creditCardChange']; 
                $arr['email2'] = $POST['email2'];
                $arr['amountChange'] = $POST['amountChange']; // Set account to have 0 initially
                // $arr['creditCard'] = $POST['creditCard'];

            // Query Changes based on condition
            if(($POST['depositOrWithdraw'] == 'withdraw') && ($POST['amountChange'] > 0)) {    
                $query = "UPDATE account SET amount=(amount - :amountChange) WHERE creditCard = :creditCardChange and email = :email2";
            } 
            else if(($POST['depositOrWithdraw'] == 'deposit') && ($POST['amountChange'] > 0)) {
                $query = "UPDATE account SET amount=(amount + :amountChange) WHERE creditCard = :creditCardChange and email = :email2";
            } 

            // Run the conditional query
            $data = $DB->write($query, $arr);
            if($data) 
            {
                header("Location:" . ROOT . "account");
                die;
            } else {
                $_SESSION['error'] = 'Please enter valid information to create an card';
            }
        }
    }

    function checkout($POST) {

        $DB = new Database();

        $_SESSION['error'] = "";

        if(isset($POST['purchase'])) {
            $arr['creditCardChange2'] = $POST['creditCardChange2']; // from shopping cart
            $arr['email4'] = $POST['email4']; // confirm email to max the account
            $arr['amountChange2'] = $POST['amountChange2'];

            $query = "UPDATE account SET amount=(amount - :amountChange2) WHERE creditCard = :creditCardChange2 and email = :email4";
        
            // Run the conditional query
            $data = $DB->write($query, $arr);
            if($data) 
            {
                header("Location:" . ROOT . "ecommercehome");
                die;
            } else {
                $_SESSION['error'] = 'Please enter valid information to create an card';
            }
        }
    }

    function fundTransfer($POST)
    {
        $DB = new Database();

        $_SESSION['error'] = "";
        if(isset($_SESSION['user_name']))
        //if(isset($POST['username']) && isset($POST['password'])) 
        {
                // array for holding exact values
            //$arr['history'] = $POST['history']; // run if value is in array and isset
                $arr['creditCardOne'] = $POST['creditCardOne'];
                $arr['creditCardTwo'] = $POST['creditCardTwo'];  
                $arr['amountChange1'] = $POST['amountChange1'];
            

            $query = "UPDATE account
                        SET amount = (case when creditCard = :creditCardOne THEN -:amountChange1
                                            when creditCard = :creditCardTwo THEN +:amountChange1
                                            END)
                        WHERE creditCard in (:creditCardOne, :creditCardTwo);";
                        // :amountChange
            //$query .=  "UPDATE account SET amount=(amount + :amountChange) WHERE creditCard = :creditCardTwo and email = :email2";
            $data = $DB->write($query, $arr);
            if(is_array($data)) 
            {
                header("Location:" . ROOT . "accountFundTransfer");
                die;
            } else {
                $_SESSION['error'] = 'Please enter valid information to create an card';
            }
        }
    }

    // Interact with cart
    function cartInteraction()
    {
        // get items

        // call function to add to history
        
    }

    // function getCard()
    // {
    //     $DB = new Database();

    //     if(isset($_SESSION['user_email'])) 
    //     {
    //         $query = "SELECT * FROM account where email = " . "kevintran1142@gmail.com";
    //         $data = $DB->read($query,$arr);
    //         if(is_array($data)) 
    //         {
    //             return true;
    //         }
    //     }
    //     return false;
    //     header("Location:" . ROOT . "login");
        
    // }


    function historyPush($POST) 
    {
        $DB = new Database();

        $_SESSION['error'] = "";
        if(isset($POST['email3']))
        {
            // Array for holding exact values
            $arr['email3'] = //SESSION['email']  // run if value is in array and isset
            $arr['history'] = date("Y-m-d H:i:s");
            $arr['message'] = $POST['email1'] . " has created a new " . $POST['creditCard'] . " card";

            $query = "INSERT INTO history (email, history, message) values (:email3, :history, :message)";
            $data = $DB->write($query, $arr);
            if($data) 
            {

            } else {
                $_SESSION['error'] = 'Please enter valid information to create an card';
            }
        }
    }

    // checkout history
    function checkoutHistory($POST) {
        $DB = new Database();

        $_SESSION['error'] = "";
        if(isset($POST['purchase']))
        {
            // Array for holding exact values
            $arr['email3'] = $POST['email3']; // run if value is in array and isset
            $arr['history1'] = date("Y-m-d H:i:s");
            $arr['message1'] = $POST['email1'] . " has created a new transaction from Pomoro Store";

            $query = "INSERT INTO history (email, history, message) values (:email3, :history1, :message1)";
            $data = $DB->write($query, $arr);
            if($data) 
            {

            } else {
                $_SESSION['error'] = 'Please enter valid information to create an card';
            }
        }
    }

    function get_all()
    {
        
        $DB = new Database();
        
        if(isset($_SESSION['email'])) 
        {
            $query = "SELECT * FROM account WHERE email = '" . $_SESSION['email'] . "'";
            $data = $DB->read($query);
            if(is_array($data))
            {
                return $data;
            }
        }
        return false;
    }
}