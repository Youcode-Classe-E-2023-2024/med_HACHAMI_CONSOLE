<?php

function getProduct($product_code) {
    require_once "config.inc.php";
    $sql ="SELECT * FROM products WHERE  product_code = ? ;";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("s", $product_code);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $product = $result->fetch_assoc();
        
        $stmt->close();
        $link->close();
        return $product;
    }
    

}