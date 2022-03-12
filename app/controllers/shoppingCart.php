<?php

Class shoppingCart extends Controller
{
    function index()
    {
        $data['title_page'] = 'Pomoro - Shopping Cart';
        
        $cart = $this->loadModel("cart");
        $cartTime = new Cart;

        //having deleteFromCart() called before getCartItems() makes the POST request more responsive but throws undefined array key warning for "cartID"
        //used @ in line below to supress the warning... not too professional but it keeps things rolling along faster for the time being
        @$cartTime->deleteFromCart($_POST);
        
        $cartItems = $cartTime->getCartItems();
        $data['cartItems'] = $cartItems;

        $cartSubtotal = $cartTime->getSubtotal();
        $data['cartSubtotal'] = $cartSubtotal;

        $this->view("shoppingCart", $data);
    }

}