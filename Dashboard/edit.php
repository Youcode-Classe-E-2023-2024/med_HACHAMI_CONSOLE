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
    <title>Edit Product</title>
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/edit.css">
</head>
<body>
<div id="navbar"></div>
<div id="sidebar"></div>
<div class="container ">
    <div class="form-container">
    <?php 
    include "./classes/dbh.classes.php";
    include "./classes/product.classes.php";
    include "./classes/product.contr.classes.php";
    $product_code = $_GET['product_code'];
    $productCont = new ProductCont();
    $product = $productCont->displayProductById($product_code);
    

    ?>
        <form action="includes/edit.inc.php" method="POST" class="form">
            
            <input type="text" placeholder="title" name="title" value="<?php echo $product[0]['title'] ?> " >
            <input type="text" placeholder="description" name="description" value="<?php echo $product[0]['description1'] ?> ">
            <input type="text" placeholder="price" name="price" value="<?php echo $product[0]['price'] ?> ">
            <input type="text" placeholder="stock quantity" name="stock_quantity" value="<?php echo $product[0]['stock_quantity'] ?> ">
            <input type="text" placeholder="reviews" name="reviews" value="<?php echo $product[0]['reviews'] ?> ">
            <input type="hidden" name="product_code" value="<?php echo isset($_GET['product_code']) ? htmlspecialchars($_GET['product_code']) : ''; ?>">
            <button type="submit" name="submit">Edit</button>
        </form>
    </div>
</div>
<script src="./Components/navbar.js"></script>
<script src="./Components/sideBar.js"></script>
</body>
</html>