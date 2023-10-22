<?php
require_once 'product.classes.php';
class ProductCont extends Product{
    
    public function displayProducts(){
        $products = $this->getAllProducts();
        return $products;

        
    }

    public function displayGames(){
        $games = $this->getAllGames();
        return $games;
    }

    public function displayMagazine(){
        $movies = $this->getAllMagazines();
        return $movies;
    }

    public function displayProductById($productCode){
        $product = $this->getProductById($productCode);
        return $product;

    }

    
    
}