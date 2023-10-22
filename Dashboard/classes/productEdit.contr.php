<?php
require_once 'product.classes.php';
class ProductEditCont extends Product{
    private $id;
    private $title;
    private $description;
    private $price;
    private $stock_quantity;
    private $reviews;
    private $typeOfproduct;
    private $product_code;

    
    public function __construct($title, $description,$price , $stock_quantity , $reviews ){
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->stock_quantity = $stock_quantity;
        $this->reviews = $reviews;
    }
   
//    public function editProduct(){
//                 echo $this->title;
//                 echo $this->product_code;
//          $this->editeProduct($this->title,$this->description,$this->price,$this->stock_quantity, $this->reviews , $this->product_code );
        
//    }
   

    
    
}