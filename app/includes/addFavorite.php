<?php

require_once "config.inc.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
    $data = json_decode(file_get_contents("php://input"));
    $productId = $data->productId;
    $userId = $data->userId;

    $sql = "INSERT INTO favorites_games (product_id, user_id) VALUES (?, ?)";
    $stmt = $link->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ii", $productId, $userId);
        if ($stmt->execute()) {
            $response = ["message" => "Favorite added successfully"];
            echo json_encode($response);
        } else {
            $response = ["error" => "Failed to add favorite"];
            echo json_encode($response);
        }
        $stmt->close();
    } else {
        $response = ["error" => "Failed to prepare statement"];
        echo json_encode($response);
    }
} else {
    $response = ["error" => "Invalid request method"];
    echo json_encode($response);
}