<?php

Class Product
{
    // private $id;
    // private $category;
    // private $name;
    // private $description;
    // private $price;

    function getProducts()
    {
        $query = "SELECT * FROM product";

        $DB = new Database();
        $data = $DB->read($query);
        if(is_array($data))
        {
            return $data;
        }
        return false;
    }

    // Get total products function
    function getCountOfProducts()
    {
        $query = "SELECT COUNT(id) FROM product";

        $DB = new Database();
        $data = $DB->read($query);
        return intval($data);
    }

    function getProductsPerPage($page) {
        $sqlQuery = "SELECT * FROM products Limit 8, " + $page; 

        $DB = new Database();
        $data = $DB->read($query);
        return intval($data);
    }
}