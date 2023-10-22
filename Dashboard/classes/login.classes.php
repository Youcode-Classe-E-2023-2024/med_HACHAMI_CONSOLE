<?php

class Login extends Dbh{

    protected function getUser($uid, $pwd ){
        $sql = "SELECT * FROM users WHERE uid = ? "; 
        $stmt = $this->connect()->prepare($sql);
        
        if(!$stmt->execute(array($uid))){
            $stmt = null;//delete the statement
            header("Location:../index.php?error=stmtfailed");  
            exit();
        }
        $resultCheck = '';
        if($stmt->rowCount() == 0) {
            $stmt = null;//delete the statement
            header("Location:../index.php?error=usernotfound");  
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["pwd"]);

        if($checkPwd == false){
            $stmt = null;//delete the statement
            header("Location:../index.php?error=wrongpassword");  
            exit();
        }else if($checkPwd == true){
            $sql = "SELECT * FROM users WHERE uid = ? OR email = ? AND pwd = ? ;";
            $stmt = $this->connect()->prepare($sql);
            
            if(!$stmt->execute(array($uid,$uid ,$pwd))){
                $stmt = null;//delete the statement
                header("Location:../index.php?error=stmtfailed");  
                exit();
            }
            if($stmt->rowCount() == 0) {
                $stmt = null;//delete the statement
                header("Location:../index.php?error=usernotfound");  
                exit();
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            
            $_SESSION['user_id'] = $user[0]['id'];
            $_SESSION['uid'] = $user[0]['uid'];

        }

    }

        
}
    


