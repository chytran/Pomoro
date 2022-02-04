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
    function totalProducts()
    {

    }
}