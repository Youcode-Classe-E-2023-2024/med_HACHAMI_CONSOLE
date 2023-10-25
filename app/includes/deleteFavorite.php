<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    require_once "config.inc.php";
    
    
    $data = json_decode(file_get_contents("php://input"));
    $userId = $data->userId;
    $productId = $data->productId;
    
    
    $sql = "DELETE FROM favorites_games WHERE product_id = ? AND user_id = ?";
    $stmt = $link->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ii", $productId, $userId);
        
        if ($stmt->execute()) {
           
            $response = ["success" => true, "message" => "Favorite deleted successfully"];
            echo json_encode($response);
        } else {
            $response = ["failed" => false,"error" => "Favorite not deleted"];
            echo json_encode($response);
        }
        
        $stmt->close();
    } else {
        
        $response = ["error" => "Favorite not deleted"];
        echo json_encode($response);
    }
} else {
    
    $response = ["error" => "Invalid request"];
    echo json_encode($response);
}