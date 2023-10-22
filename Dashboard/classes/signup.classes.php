<?php

class SignUp extends Dbh{

    protected function setUser($uid, $pwd , $email){
        $sql = "INSERT INTO users (uid , pwd , email) VALUES (? , ? , ?);"; 
        $stmt = $this->connect()->prepare($sql);
        $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
        if(!$stmt->execute(array($uid,$hashedPwd ,$email))){
            $stmt = null;//delete the statement
            header("Location:../index.php?error=stmtfailed");  
            exit();
        }
        $resultCheck = '';
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }

        return $resultCheck;
    }
    protected function checkUser($uid,$email){
        $sql = "SELECT * FROM users WHERE uid = ? OR email = ?;"; 
        $stmt = $this->connect()->prepare($sql);
        if(!$stmt->execute(array($uid,$email))) {
            $stmt = null;//delete the statement
            header("Location:../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck = '';
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }

        return $resultCheck;
    }



}