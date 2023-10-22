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
    <title>Document</title>
    <link rel="stylesheet" href="style/home.css">
    
</head>
<body>
<div id="navbar"></div>
<div id="sidebar"></div>
<?php 
    include "./classes/dbh.classes.php";
    include "./classes/product.classes.php";
    include "./classes/product.contr.classes.php";
    $product_code = $_GET['product_code'];
    $productCont = new ProductCont();
    $product = $productCont->displayProductById($product_code);
    

    ?>
<div id="myModal" class="modal">

    <form action="includes/delete.inc.php" method="POST">
    <div class="modal-content">
    
      
        <p>Are you sure you want to delete <?php echo $product[0]['title'] . " "  . $product[0]['typeOfProduct'] ;   ?>     ?</p>
        <input type="hidden" name="product_code" value="<?php echo isset($_GET['product_code']) ? htmlspecialchars($_GET['product_code']) : ''; ?>"> 
        <div class="modal-footer">
            <button type="submit" name="submit">Yes</button>
            <button type="button" id="no" onclick="closeModel()" >No</button>
        </div>
        </div>
      
    </div>
    </form>
      
  
</div>
<script>
    var modal = document.getElementById("myModal");


    
    function closeModel(){
        window.location.href = './Home.php';
    }
</script>
<script src="./Components/navbar.js"></script>
<script src="./Components/sideBar.js"></script>

</body>
</html>