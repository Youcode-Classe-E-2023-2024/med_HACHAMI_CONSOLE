<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-Deatiles</title>
    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="./style/product-details.css">
</head>
<body>
    <div id="navbar"></div>
    <div class="store">
        <div class="direction">
            <a  href="./store.php">Store </a>
            <span>> Product-Deatils</span>
            
        </div>
        
        <div class="product-deatails">
        <?php
                $product_code = $_GET['product_code'];
                include_once('./includes/productDeatils.inc.php');
                $product = getProduct($product_code );
        ?>
            <div class="product-thumb">
                <img src="./assets/<?php echo $product['imgUrl'];?>" alt="">
            </div>
            <div class="product-description">
                <h1><?php echo $product['title'] ?></h1>
                <p>PRICE: $ <?php echo $product['price'] ?></p>
                <div class="product-car">
                    <span>PRODUCT code: <?php echo $product['product_code'] ?></span>
                    <span>CATEGORY: <?php echo $product['typeOfProduct'] ?></span>
                    <span>STOCK QUANTITY : <?php echo $product['stock_quantity'] ?></span>
                </div>
                <div class="poroduct-footer">
                    <div class="addcart-btn">
                        <a href="">Add To cart</a>
                        <img src="./assets/cart.png" alt="">
                    </div>
                    <p><?php echo $product['reviews'] ?> REVIEWS</p>
                </div>
            </div>
        </div>
    </div>
    <div id="footer"></div>
    <script src="./Components/Footer.js"></script>
    <script src="./Components/navBar.js"></script>
</body>
</html>