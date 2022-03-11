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
        
        $cartTime->checkout($_POST);
        // Call checkout function from account model
        // History display purchase has happened

        $this->view("checkout", $data);
    }

}