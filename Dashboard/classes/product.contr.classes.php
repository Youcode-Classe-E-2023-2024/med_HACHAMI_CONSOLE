<?php
require_once 'product.classes.php';
class ProductCont extends Product{
    
    public function displayProducts(){
        $products = $this->getAllProducts();
        return $products;

        // require 'Home.php';
    }

    public function displayProductById($productCode){
        $product = $this->getProductById($productCode);
        return $product;

    }

    
    
}