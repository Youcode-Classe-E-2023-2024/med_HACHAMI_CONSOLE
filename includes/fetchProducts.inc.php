<?php
function getAllProducts(){
    require_once "config.inc.php";
    $products = [];
    
    
        $sql = "SELECT * FROM products;";
        $result = $link->query($sql);
        if(mysqli_num_rows($result) > 0){
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        }else {
            echo "No products found.";
        }
        mysqli_free_result($result);
        mysqli_close($link);

    
    return $products;
}
