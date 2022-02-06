<?php

Class EcommerceHome extends Controller
{
    function index()
    {
        $data['title_page'] = 'Pomoro - Home';
        
        //fill data['product'] with product info
        $product = $this->loadModel("product");
        $productTime = new Product;
        $result = $productTime->getProducts();
        $data['products'] = $result;

        //allows calling total # of products
        $numOfProducts = $productTime->getCountOfProducts();
        $data['numOfProducts'] = $numOfProducts;

        //testing # of products per page and pagination
        $data['productsPerPage'] = 8;
        $data['pageOffset'] = 0;

        $this->view("ecommerceHome", $data);
    }

}