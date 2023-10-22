<?php
// require "dbh.classes.php";
class Product extends Dbh{
        protected function getAllProducts(){
            try {
                $sql = "SELECT * FROM products;";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
                if (empty($result)) {
                    echo "no_datatodisplay";
                    exit();
                }
    
                return $result;
            } catch (PDOException $e) {
                // Handle any exceptions that may occur during database operations.
                // You can log the error or redirect to an error page.
                header("Location: ../index.php?error=database_error");
                exit();
            }

        }

        protected function getProductById($productCode) {
            try {
                $sql = "SELECT * FROM products WHERE product_code = :product_code;";
                $stmt = $this->connect()->prepare($sql);
                $stmt->bindParam(':product_code', $productCode, PDO::PARAM_STR);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
                if (empty($result)) {
                    echo "no_datatodisplay";
                    exit();
                }
                
                return $result;
    
                
            } catch (PDOException $e) {
                // Handle any exceptions that may occur during database operations.
                // You can log the error or redirect to an error page.
                echo 'Error: ' . $e->getMessage();
                // header("Location: ../edit.php?error=database_error");
                // exit();
            }


        }

        public function editeProduct($title,$description,$price,$stock_quantity, $reviews , $product_code ){
            try {
                $sql = "UPDATE products SET title = :title , description1 = :description, price = :price , stock_quantity = :stock_quantity , reviews = :reviews WHERE product_code = :product_code" ;
                
                // $sql = "UPDATE products SET title = 'new desc' WHERE product_code = '700ac288'";
                $stmt = $this->connect()->prepare($sql);
                $stmt->bindParam(':title', $title, PDO::PARAM_STR);
                $stmt->bindParam(':description', $description, PDO::PARAM_STR);
                $stmt->bindParam(':price', $price, PDO::PARAM_STR);
                $stmt->bindParam(':stock_quantity', $stock_quantity, PDO::PARAM_INT);
                $stmt->bindParam(':reviews', $reviews, PDO::PARAM_INT);
                $stmt->bindParam(':product_code', $product_code, PDO::PARAM_STR);
                
                
                if ($stmt->execute()) {
                    header("Location: ../home.php?succes=edited");
                    exit();
                } else {
                    header("Location: ../edit.php?error=database_error");
                    exit();
                }
             
                
                
    
                
            } catch (PDOException $e) {
                
                header("Location: ../edit.php?error=database_error");
                exit();
            }
        }
}