<?php

Class Product
{
    //constant seems to not always make it into functions
    //const productsPerPage = 4;
    //also experiencing unique issues with SELECT COUNT queries that do not occur with exact same queries in phpMyAdmin

    function getAllCategories()
    {
        $query = "SELECT * FROM category;";
        
        $DB = new Database();
        $data = $DB->read($query);
        if(is_array($data))
        {
            return $data;
        }
        return false;
    }

    function getAllProducts($page)
    {
        $query = "SELECT * FROM product WHERE id BETWEEN " . (1 + ((intval($page) - 1) * 4)) . " AND " . (intval($page) * 4) . ";";

        $DB = new Database();
        $data = $DB->read($query);
        if(is_array($data))
        {
            return $data;
        }
        return false;
    }

    function getCategoryProducts($categoryID, $page)
    {
        $query = "SELECT * FROM product WHERE product.category = " . $categoryID . " LIMIT 4;";

        $DB = new Database();
        $data = $DB->read($query);
        if(is_array($data))
        {
            return $data;
        }
        return false;
    }

    function getCountOfProducts($categoryID)
    {
        if($categoryID == 0) {
            $query = "SELECT COUNT(product.id) FROM product;";
        } else {
            $query = "SELECT COUNT(product.id) FROM product WHERE category = " . $categoryID . ";";        
        }
        
        $DB = new Database();
        $data = $DB->read($query);
        return intval($data);
    }

    function getCountOfCategories()
    {
        $query = "SELECT COUNT(category.id) FROM category;";

        $DB = new Database();
        $data = $DB->read($query);
        return intval($data);
    }

    function getProductsPerPage($page) {
        $sqlQuery = "SELECT * FROM products Limit 8, " + $page; 

        $DB = new Database();
        $data = $DB->read($query);
        if(is_array($data))
        {
            return $data;
        }
        return false;
    }
}