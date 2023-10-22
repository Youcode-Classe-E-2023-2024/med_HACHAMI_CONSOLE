<?php
session_start();


if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style/home.css">
    
</head>
<body>
<div id="navbar"></div>
<div id="sidebar"></div>

<div class="container ">
    <div class="table">
        <div class="table-header">
			<div class="header__item"><p>ID</p></div>
			<div class="header__item"><p>Title</p></div>
			<div class="header__item"><p>Type</p></div>
            <div class="header__item"><p>Price</p></div>
			<div class="header__item"><p>Product code</p></div>
			<div class="header__item"><p>Stock quantity</p></div>
            <div class="header__item"><p>Reviews</p></div>
            <div class="header__item"><p>Actions</p></div>
            
		</div>
        <div class="table-content">	
        <?php 
            include "./classes/dbh.classes.php";
			include "./classes/product.classes.php";
			include "./classes/product.contr.classes.php";
            $product = new ProductCont();
            $products = $product->displayProducts();
            
            foreach ($products as $product) { 
            ?>
            <div class="table-row">		
                <div class="table-data"><?php echo $product['id']; ?></div>
                <div class="table-data"><?php echo $product['title']; ?></div>
                <div class="table-data"><?php echo $product['typeOfProduct']; ?></div>
                <div class="table-data"><?php echo $product['price']; ?></div>
                <div class="table-data"><?php echo $product['product_code']; ?></div>
                <div class="table-data"><?php echo $product['stock_quantity']; ?></div>
                <div class="table-data"><?php echo $product['reviews']; ?></div>
                <div class="table-data actions">
                    <a href="edit.php?product_code=<?php echo $product['product_code'];?>"  ><img src="./assets/edit-icon.png" class="action-icon"></a>
                    <a href="delete.php?product_code=<?php echo $product['product_code']; ?>"  ><img src="./assets/icon-delete.png" class="action-icon"></a>
                </div>
           
            </div>
            <?php } ?>
        </div>
        
        
        
    </table>
                
    <script src="./Components/navbar.js"></script>
    <script src="./Components/sideBar.js"></script>
</div>
</body>
</html>