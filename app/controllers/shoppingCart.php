<?php

Class shoppingCart extends Controller
{
    function index()
    {
        $data['title_page'] = 'Pomoro - Shopping Cart';
        
        $cart = $this->loadModel("cart");
        $cartTime = new Cart;
        $cartTime->deleteFromCart($_POST);
        
        $cartItems = $cartTime->getCartItems();
        $data['cartItems'] = $cartItems;

        $cartSubtotal = $cartTime->getSubtotal();
        $data['cartSubtotal'] = $cartSubtotal;

        $this->view("shoppingCart", $data);
    }

}