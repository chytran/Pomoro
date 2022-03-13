<?php

Class checkOut extends Controller
{
    function index()
    {
        $data['title_page'] = 'Pomoro - Checkout';
        
        $cart = $this->loadModel("cart");
        $cartTime = new Cart;
        
        $cartItems = $cartTime->getCartItems();
        $data['cartItems'] = $cartItems;

        $account = $this->loadModel("account");
        $accountTime = new Account;
        $cards = $accountTime->get_all();
        $data['cards'] = $cards;

        $history = $this->loadModel("historyModel");
        $historyTime = new historyModel;
        
        // History display purchase has happened

        
        // Call checkout function from account model
        @$cartTime->checkout($_POST);

        $this->view("checkout", $data);
    }

}