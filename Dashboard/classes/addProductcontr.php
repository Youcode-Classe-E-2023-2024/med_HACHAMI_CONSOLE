<?php

class AddProductCont extends AddProduct  {
    private $title;
    private $description;
    private $price;
    private $quantity;
    private $product_code;
    private $typeOfProduct;
    private $productImage;

    public function __construct($title, $description, $price, $quantity,
     $product_code, $typeOfProduct, $productImage){
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;   
        $this->product_code = $product_code;
        $this->typeOfProduct = $typeOfProduct;
        $this->productImage = $productImage;
     }
     public function addProduct(){
        $targetDirectory = '../../App/assets/';
        $targetFile = $targetDirectory . basename($_FILES["productImage"]["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        if (getimagesize($_FILES["productImage"]["tmp_name"]) === false) {
            echo "File is not an image.";
        } else {
            $productImage = htmlspecialchars(basename($_FILES["productImage"]["name"])) ;
            $inseret = $this->insertProduct($this->title, $this->description, $this->price, $this->quantity,
            $this->product_code, $this->typeOfProduct, $productImage);
            if($inseret && move_uploaded_file($_FILES["productImage"]["tmp_name"], $targetFile)){
                header("location:../Home.php");
                exit();
                
            }
             else {
                    header("location:../addNewProduct.php?error=Sorry there was an error uploading your file.");
                    exit();
                    
                }
        }
     }
     public function getImage(){
        return $this->productImage;
     }
}