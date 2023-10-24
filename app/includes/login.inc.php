<?php

if(isset($_POST['submit'])){
    require_once "login.functions.php";
    
    $email = $_POST['email'];
    $pwdInput = $_POST['pwd'];

    echo $email . "<br/>";
    echo $pwdInput. "<br/>";

    
    loginUser($email, $pwdInput);
    header("Location: ../Profile.php?login=Succes");
    
}