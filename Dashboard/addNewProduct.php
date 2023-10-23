<!-- <?php
session_start();


if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit;
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/addNewProduct.css">
   
    
</head>
<body>
<div id="navbar"></div>
<div id="sidebar"></div>

<div class="container ">
    <div class="form-container">
    
        <form action="includes/addProduct.inc.php" class="form" method="POST" enctype="multipart/form-data">
            
            <div class="row row1">
                <input type="text" placeholder="title" name="title" >
                <select name="typeOfProduct" id="">
                    <option value="games">Games</option>
                    <option value="magazine">Magazine</option>
                </select>
            </div>
            <div class="row row2">
                <input type="text" placeholder="price" name="price">
                <input type="text" placeholder="stock quantity" name="stock_quantity" >
            </div>
            <div class="row row3">
                <input type="text" name="product_code" placeholder="Product code" >
                <label for="fileInput" class="custom-file-upload">
                    <input type="file" id="fileInput" name="productImage">
                    Choose a file
                </label>
            </div>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Enter the description"></textarea>
            
            <button type="submit" name="submit">Add product</button>
        </form>
    </div>
        
    
</div>






<script src="./Components/navbar.js"></script>
<script src="./Components/sideBar.js"></script>

</body>
</html>