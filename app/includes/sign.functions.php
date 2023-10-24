<?php

   
function emptyInput($email,$fullname , $pwdrepeat , $pwd) {
    $result='';
    if(empty($email) || empty($fullname) || empty($pwdrepeat)|| empty($pwd) ){
        $result = false;
    }else{
        $result = true;
    }
    return $result;

}
function validUid($fullname){
    $result ='';
    if(!preg_match('/^[a-zA-Z0-9_]+$/',$fullname)){
    $result = false;
    }else{
    $result = true;
    }
    return $result;
}
function validEmail($email){
    $result ='';
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}
function pwdMatch($pwd , $pwdrepeat){
    $result ='';
    if($pwd !== $pwdrepeat){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}

function uidTakenCheck($link,$fullname,$email){
    
    
    $result ='';
    if(!checkUser($link,$fullname,$email)){
        echo "error 111";
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}


     
function checkUser($link,$fullname, $email) {
    

    if($link == false){
        mysqli_connect_error();
        die("Error: could not connect");
    }

    $sql = "SELECT * FROM users WHERE fullname = ? OR email = ?"; 
    $stmt = $link->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $fullname, $email); // Assuming both parameters are strings

        if ($stmt->execute()) {
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                // Records were found
                $resultCheck = false;
            } else {
                // No records were found
                $resultCheck = true;
            }
        } else {
           
            header("Location:../SignUp.php?error");
            exit();
        }

        $stmt->close();
    } else {
        
        header("Location:../SignUp.php?error=stmtfailed");
        exit();
    }

    return $resultCheck;
}








    
    
    
    



function setUser($link,$fullname, $phone, $pwd, $email) {
    
    
    

    if($link == false){
        mysqli_connect_error();
        die("Error: could not connect");
    }
    $sql = "INSERT INTO users (fullname, email, phone, pwd) VALUES (?, ?, ?, ?)";
    $stmt = $link->prepare($sql);

    if ($stmt) {
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        $stmt->bind_param("ssss", $fullname, $email, $phone, $hashedPwd); // Adjust data types accordingly

        if ($stmt->execute()) {
            // Successful insertion
            $resultCheck = true;
        } else {
            // Handle query execution error
            header("Location:../SignUp.php?error");
            exit();
        }

        $stmt->close();
    } else {
        // Handle the case where the statement preparation failed
        header("Location:../SignUp.php?error=stmtfailed");
        exit();
    }

    return $resultCheck;
}

