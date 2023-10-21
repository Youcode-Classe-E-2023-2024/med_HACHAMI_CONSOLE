<?php


function getProductByType($productType) {
    require_once "config.inc.php";

    $products = [];

    $sql = "SELECT * FROM products WHERE typeOfProduct = ?;";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("s", $productType);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }

  
    return $products;
}