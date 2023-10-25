<?php

function likedProduct($userId){
    require_once "config.inc.php";
    $products = [];
    $sql = "SELECT p.title , p.price , p.imgUrl FROM  users as u  , favorites_games as fg , products as p WHERE u.id = fg.user_Id AND fg.product_id = p.id AND u.id = ?; ";
    $stmt = $link->prepare($sql);
    if($stmt){
        $stmt->bind_param("i", $userId);
        $stmt ->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }else{
        echo "error";
    }
    return $products;
}
// $products = likedProduct(4);
// foreach($products as $product){
//     echo "product title : " . $product['title'] . "<br/>";
//     echo "product price : " . $product['price']. "<br/>";
//     echo "<br/>" . "<br/>";


// }
