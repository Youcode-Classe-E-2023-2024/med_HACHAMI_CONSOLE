<?php
if(isset($_POST['submit']))
{
    
    $product_code = $_POST['product_code'];
    include "../classes/dbh.classes.php";
    include "../classes/product.classes.php";
    
   
    $product = new Product();
    $product->deleteProduct($product_code);
   
    

}