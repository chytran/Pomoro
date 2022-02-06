<?php

Class EcommerceHome extends Controller
{
    function index($b, $c)
    {
        if ($b == 'page') {
            $data['title_page'] = 'Pomoro - Home';
        
            //fill data['product'] with product info
            $product = $this->loadModel("product");
            $productTime = new Product;

            //allows calling total # of products
            $numOfProducts = $productTime->getCountOfProducts();
            $data['numOfProducts'] = $numOfProducts;
            $productsPerPage = 8;

            // pagination
            for ($i = 0; $i < ($numOfProducts / $productsPerPage);  $i++) {
                $result = $productTime->getProductsPerPage($i);
                array_push($data['products'][$i], $result);
            }

            // If url page # = #i 
            // $c needs to be?

            $data['products'] = $result;
            

            //testing # of products per page and pagination
            $data['productsPerPage'] = 8;
            $data['pageOffset'] = 0;
        }
        
        $this->view("ecommerceHome", $data);
    }

}