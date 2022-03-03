<?php

Class Cart
{
    /*xxxxxxxxxxxxxxx needs $POST to insert xxxxxxxxxxxxxxxx*/
    function addToCart($POST) {
        if(isset($_POST['username']))
        {
            $arr['username'] = $POST['username'];
            $arr['product'] = $POST['product'];        
            $query = "INSERT INTO cart (username, productID) VALUES (:username, :product);";
            
            $DB = new Database();
            $data = $DB->write($query, $arr);
            if($data)
            {
                echo 'alert("Product added to cart.");';
            } else {
                echo 'alert("Could not add to cart at this time.");';
            }
        }
    }
    
    function getCartItems() {
        $query = "SELECT cart.id, cart.username, cart.productID, product.name, product.description, product.price FROM cart, product WHERE cart.username = \"" . $_SESSION['user_name1'] . "\" and cart.productID = product.id;";
        
        $DB = new Database();
        $data = $DB->read($query);
        if(is_array($data))
        {
            return $data;
        }
        return false;
    }

    function getSubtotal() {
        $query = "SELECT SUM(product.price) FROM cart, product WHERE cart.username = \"" . $_SESSION['user_name1'] . "\" and cart.productID = product.id;";

        $DB = new Database();
        $data = $DB->read($query);
        if(is_array($data)) {
            return $data;
        }
        return 0.00;
    }

    function deleteFromCart($POST) {
            //$arr['username'] = $POST['username'];
            //$arr['product'] = $POST['product'];
            $arr['cartID'] = $POST['cartID'];

            $query = "DELETE FROM cart WHERE cart.id = :cartID;";
            
            $DB = new Database();
            $data = $DB->write($query, $arr);
    }

    function emptyCart() {
        $query = "DELETE FROM cart WHERE username = " . $_SESSION['user_name1'] . ";";
        
        $DB = new Database();
        $data = $DB->write($query);
    }
}