<?php
if(isset($_POST["submit"])){
    require_once "config.inc.php";
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    
    
    
    function signUpUser($link, $fullname, $email, $phone, $pwd , $pwdrepeat ){
        include_once 'sign.functions.php';
        if(emptyInput($email,$fullname , $pwdrepeat , $pwd) === false){
            header("location:../SignUp.php?error=emptyinput");
            exit();
            
        }

        if(validUid($fullname) === false){
            header("location: ../SignUp.php?error=invaliduid");
            exit();
        }

        if(validEmail($email) === false){
            header("location: ../SignUp.php?error=invalidemail");
            exit();
        }


        if(pwdMatch($pwd , $pwdrepeat) === false){
            header("location: ../SignUp.php?error=passwordmatch");
            exit();
        }


        if(uidTakenCheck($link,$fullname,$email) === false){
            header("location: ../SignUp.php?error=useroremailtaken");
            exit();
        }

        $res = setUser($link,$fullname , $phone, $pwd , $email);
        return $res;  
    }

    $res = signUpUser($link,$fullname, $email, $phone,$pwd , $pwdrepeat);
    if($res === true){
        header("location:../SignUp.php?signup=success");
        exit();
    }else{
        header("location:../SignUp.php?signup=failed");
        exit();
    }
    


}