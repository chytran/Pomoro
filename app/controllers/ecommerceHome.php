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

        $data['products'] = $result;

        $this->view("ecommerceHome", $data);
    }

}