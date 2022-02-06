<?php

Class EcommerceHome extends Controller
{
    function index()
    {
        // if ($b == 'page') {
        $data['title_page'] = 'Pomoro - Home';
    
        //fill data['product'] with product info
        $product = $this->loadModel("product");
        $productTime = new Product;

        //allows calling total # of products
        $numOfProducts = $productTime->getCountOfProducts();
        $data['numOfProducts'] = $numOfProducts;
        $productsPerPage = 8;

            // pagination
            // for ($i = 1; $i <= ($numOfProducts / $productsPerPage);  $i++) {
            //     // $result temporary holds values to push to array
                
            //     $result = $productTime->getProductsPerPage($i); // pushes data

            //     // Hold page numbers
            //     array_push($data['pageNumber'][$i], $i);

            //     // Holds data results
            //     array_push($data['products'][$i], $result);

            // }

            // // If url page # = #i 
            // // $c needs to be?
            // if (in_array($c, $data['pageNumber'])) {
            //     $data['displayData'] = $data['products'][$c];
            //     if (!$c < 2) {
            //         $data['pageNumberBack'] = $c - 1; // page number if user clicks left arrow
            //         $data['pageNumberForward'] = $c + 1; // page number if user clicks right arrow
            //     }           
            // }

            
            // //testing # of products per page and pagination
            // $data['productsPerPage'] = 8;
            // $data['pageOffset'] = 0;
        // }
        $data['products'] = $result;
        $this->view("ecommerceHome", $data);
    }

}