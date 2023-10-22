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
<nav class="navbar">
    <a href="#"><img src="./assets/Console_logo-footer.png" alt="" srcset="" class="logo"></a>
    <a href="includes/logout.inc.php"><img src="./assets/log-out.png" alt="" srcset="" class="log-out"></a>
</nav>
<div class="side-bar">
    <p class="">Navigation</p>
    <ul class="sideBar-items">
        <li class="sideBar-item">
            <img src="./assets/icon-home.png" class="item-icon" >
            <a href="#" class="sideBar-link">Home</a>
        </li>
        <li class="sideBar-item">
            <img src="./assets/icons-game.png" class="item-icon" >
            <a href="#" class="sideBar-link">Games</a>
        </li>
        <li class="sideBar-item">
            <img src="./assets/icons-magazine.png" class="item-icon" >
            <a href="#" class="sideBar-link">Magazine</a>
        </li>
    </ul>
</div>

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
                <div class="table-data"><?php echo $product['product_code']; ?></div>
                <div class="table-data"><?php echo $product['reviews']; ?></div>
           
            </div>
            <?php } ?>
        </div>
        
        
        
    </table>
                
    
</div>
</body>
</html>