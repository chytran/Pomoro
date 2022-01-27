<?php

Class Product
{
    private $id;
    private $category;
    private $name;
    private $description;
    private $price;

    function getProducts()
    {
        $DB = new Database();

        $query = "SELECT * FROM product";
        $data = $DB->read($query);
    }
}