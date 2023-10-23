<?php


if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $typeOfProduct = $_POST['typeOfProduct']; 
    $price = $_POST['price'];
    $quantity = $_POST['stock_quantity'];
    $product_code = $_POST['product_code'];
    $description = $_POST['description'];
    $productImage = $_FILES['productImage'];

    include "../classes/dbh.classes.php";
    include "../classes/addProduct.classes.php";
    include "../classes/addProductcontr.php";

    $product = new AddProductCont($title, $description, $price, $quantity,
    $product_code, $typeOfProduct, $productImage);
    $product->addProduct();
    // echo var_dump($product->getImage());
    


    
}