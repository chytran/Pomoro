<?php

Class EcommerceHome extends Controller
{
    function index()
    {
        // $DB = new Database();
        // $data = $DB->read("SELECT * FROM USERS, CATEGORY, PRODUCT"); // data holds everything from query
        $data['title_page'] = 'Pomoro - Home';
        
        $product = $this->loadModel("product");
        $productTime = new Product;
        $result = $productTime->getProducts();
        // $totalCount = $productTime->totalProducts(); // gets total products

        $data['products'] = $result;
        // $data['totalCount'] = $totalCount;
        // $data['howManyDisplay'] = 8;

        $this->view("ecommerceHome", $data);
    }

}