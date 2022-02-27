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
    
    function getCartItems($username) {
        $query = "SELECT * FROM cart WHERE username = " . $username .";";
        
        $DB = new Database();
        $data = $DB->read($query);
        if(is_array($data))
        {
            return $data;
        }
        return false;
    }

    function deleteFromCart($username, $productID) {
        $query = "DELETE FROM cart WHERE username = " . $username . " AND productID = " . $productID . ";";
        
        $DB = new Database();
        $data = $DB->write($query);
    }

    function emptyCart($username) {
        $query = "DELETE * FROM cart WHERE username = " . $username . ";";
        
        $DB = new Database();
        $data = $DB->write($query);
    }
}