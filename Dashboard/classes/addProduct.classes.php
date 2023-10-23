<?php

class AddProduct extends Dbh{

    protected function insertProduct($title, $description, $price, $quantity,
    $product_code, $typeOfProduct, $productImage){
        try {
            
            $sql = "INSERT INTO  products (title,imgUrl,description1,price,typeOfProduct,product_code,stock_quantity) VALUES
             (:title,:imgUrl,:description1, :price,:typeOfProduct,:product_code,:stock_quantity);";
            $stmt = $this->connect()->prepare($sql);
            
            $stmt->bindParam(':title', $title, PDO::PARAM_STR);
            $stmt->bindParam(':imgUrl', $productImage, PDO::PARAM_STR);
            $stmt->bindParam(':description1', $description, PDO::PARAM_STR);
            $stmt->bindParam(':price', $price,PDO::PARAM_INT);
            $stmt->bindParam(':typeOfProduct', $typeOfProduct, PDO::PARAM_STR);
            $stmt->bindParam(':product_code', $product_code, PDO::PARAM_STR);
            $stmt->bindParam(':stock_quantity', $quantity, PDO::PARAM_INT);
           
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }

            
        } catch (PDOException $e) {
            // Handle any exceptions that may occur during database operations.
            // You can log the error or redirect to an error page.
            echo 'Error: ' . $e->getMessage();
            // header("Location: ../edit.php?error=database_error");
            // exit();
        }

    }
}