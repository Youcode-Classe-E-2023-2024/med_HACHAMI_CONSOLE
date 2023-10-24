<?php

function isFavorite($productId,$userId){
    
    $link = mysqli_connect("localhost", "root", '', "test_db");
    $sql = "SELECT COUNT(*) FROM favorites_games WHERE   product_id  = ? AND user_Id  = ?";
    
   
    $stmt = $link->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ii", $productId, $userId);
        $stmt->execute();
        $count = '';
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        return $count > 0; 
    } else {
       
        return false; 
    }
}

