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

    //SQL data object's array won't return a float after much testing... ended up using embedded php to add up prices in the view and store to session variable $_SESSION['orderTotal']
    function getSubtotal() {
        $query = "SELECT SUM(product.price) FROM cart, product WHERE cart.username = \"" . $_SESSION['user_name1'] . "\" and cart.productID = product.id;";

        $DB = new Database();
        $data = $DB->read($query);
        if(is_array($data)) {
            //return var_dump($data);
            return $data;
        }
        return 0.00;
    }

    function deleteFromCart($POST) {
        //$arr['username'] = $POST['username'];
        //$arr['product'] = $POST['product'];
        $arr['cartID'] = $POST['cartID'];

        if (is_numeric($arr['cartID'])) {
            $query = "DELETE FROM cart WHERE cart.id = :cartID AND username = \"" . $_SESSION['user_name1'] .  "\";";
            
            $DB = new Database();
            $data = $DB->write($query, $arr);
        }
        else if ($arr['cartID'] == "a") {
            $query = "DELETE FROM cart WHERE username = \"" . $_SESSION['user_name1'] . "\";";
    
        $DB = new Database();
        $data = $DB->write($query);
        }
    }

    function checkout($POST) {
        //check that $_POST['email'] == $_SESSION['email'] before allowing transaction...
        //double check if it should be $_POST or $POST for line below
        if ($_POST['email'] == $_SESSION['email']) {
            $arr['email'] = $POST['email'];
            $arr['creditCard'] = $POST['creditCard'];
            $arr['orderTotal'] = $_SESSION['orderTotal']; //amountChange
            
            $query = "UPDATE account SET amount=(amount - :orderTotal) WHERE creditCard = :creditCard AND email = :email; DELETE FROM cart WHERE username = \"". $_SESSION['user_name1'] . "\";"; // update query to add: INSERT INTO history (username, email, message, changes, currentAmount) SELECT account.amount FROM account INNER JOIN";

            $DB = new Database();
            $data = $DB->write($query, $arr);

            if($data)
            {
                //transaction completes but session is ended(?), so sent back to home page to sign in.
                header("Location:" . ROOT);
            } else {
                $_SESSION['error'] = 'Unable to complete checkout.';
            }
        }
    }
}