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
}