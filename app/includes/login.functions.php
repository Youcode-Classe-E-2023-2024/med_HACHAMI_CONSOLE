<?php

function emptyInput($email, $pwd) {
    $result='';
    if(empty($email) || empty($pwd) ){
        $result = false;
    }else{
        $result = true;
    }
    return $result;

}

function loginUser($email, $pwdInput){
    require_once "config.inc.php";
    $sql = "SELECT * FROM users WHERE email = ? ;";
    $stmt = $link->prepare($sql);
   

    if (!$stmt) {
        // Handle the case where the statement preparation failed
        header("Location: ../index.php?error=stmtfailed");
        exit();
    }
    
    $stmt->bind_param("s",$email);  
    
    if (!$stmt->execute()) {
        // Handle the case where the query execution failed
        $stmt->close();
        header("Location: ../index.php?error=stmtfailed");
        exit();
    }
    
    $resultCheck = '';
    
    $stmt->store_result();
    
    if ($stmt->num_rows == 0) {
        $stmt->close();
        header("Location: ../Profile.php?error=usernotfound1");
        exit();
    }
    $hashed_password ='';
    $user_id = $user_fullname = $user_email = $user_phone='';
    $stmt->bind_result($user_id, $user_fullname, $user_email, $user_phone ,$hashed_password);

    $stmt->fetch();
    
    $checkPwd = password_verify($pwdInput, $hashed_password);
    echo $checkPwd.'<br />';
    echo $pwdInput . '<br />';
    echo $user_email.'<br />';
    
    echo $hashed_password .'<br />';
    if ($checkPwd == false) {
        header("Location: ../index.php?error=wrongpassword");
        exit();
    } elseif ($checkPwd == true) {
        $sql = "SELECT * FROM users WHERE  email = ? AND pwd = ?";
        $stmt = $link->prepare($sql);
    
        if (!$stmt) {
            // Handle the case where the statement preparation failed
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }
    
        $stmt->bind_param("ss", $email, $pwdInput); // Assuming $uid and $pwd are both strings
    
        if (!$stmt->execute()) {
            // Handle the case where the query execution failed
            $stmt->close();
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }
    
        
        session_start();
    
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_fullname'] = $user_fullname;

        
    }


}