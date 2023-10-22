<?php
    


    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="./style/store.css">
    <title>Store</title>
</head>
<body>
    <div id="navbar"></div>
    <div class="store">
        <div class="input-container">
            <form action="" method="POST">
                <select name="productType" onchange="this.form.submit()">
                    <option value="all">ALL products</option>
                    <option value="games">Games</option>
                    <option value="magazine">Magazine</option>
                </select>
            </form>
            
        </div>
        <div class="store-cards">
        <?php
                
            if(isset($_POST['productType'])){
            include_once('./includes/fetchProductByType.inc.php');
            $productType = $_POST['productType'];
            $products1 = getProductByType($productType);
            foreach($products1 as $product){ 
        ?>
            <div class="store-card">
                <h1><?php echo $product['title'] ?></h1>
                <div class="card-thumb">
                    <img src="./assets/<?php echo $product['imgUrl'];?>" alt=""  >
                </div>
                <p><?php echo $product['description1'] ?></p>
                <div class="storeCard-footer">
                    <a href="./product-details.php?product_code=<?php echo $product['product_code']  ?>">Buy Now</a>
                    <span>$ <?php echo $product['price'] ?></span>
                </div>
            </div>
            <?php }} else{?>
            <?php
                include_once('./includes/fetchProducts.inc.php');
                $products = getAllProducts();
                foreach($products as $product){ 
            ?>
            <div class="store-card">
                <h1><?php echo $product['title'] ?></h1>
                <div class="card-thumb">
                    <img src="./assets/<?php echo $product['imgUrl'];?>" alt=""  >
                </div>
                <p><?php echo $product['description1'] ?></p>
                <div class="storeCard-footer">
                    <a href="./product-details.php?product_code=<?php echo $product['product_code']  ?>">Buy Now</a>
                    <span>$ <?php echo $product['price'] ?></span>
                </div>
            </div>
            <?php }}?>
            
            
        </div>
        
    </div>
    
    <div id="footer"></div>
    <script src="./Components/Footer.js"></script>
    <script src="./Components/navBar.js"></script>
</body>
</html>