<?php
if(isset($_POST['submit']))
{
    //Grabing the data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $reviews = $_POST['reviews'];
    $product_code = $_POST['product_code'];
    include "../classes/dbh.classes.php";
    include "../classes/product.classes.php";
    
   
    $product = new Product();
    $product->editeProduct($title,$description,$price, $stock_quantity,$reviews,$product_code);
   
    

}