<?php

class SignupCont extends SignUp {
    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdrepeat, $email){
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwd;
        $this->email = $email;
    }
    public function signUpUser(){

        if($this->emptyInput() === false){
            header("location:../index.php?error=emptyinput");
            exit();
        }

        if($this->validUid() === false){
            header("location: ../index.php?error=invaliduid");
            exit();
        }

        if($this->validEmail() === false){
            header("location: ../index.php?error=invalidemail");
            exit();
        }


        if($this->pwdMatch() === false){
            header("location: ../index.php?error=passwordmatch");
            exit();
        }


        if($this->uidTakenCheck() === false){
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd , $this->email);
        
    }
    private function emptyInput() {
        $result='';
        if(empty($this->email) || empty($this->uid) || empty($this->pwdrepeat)|| empty($this->pwd) ){
            $result = false;
        }else{
            $result = true;
        }
        return $result;

    }
    private function validUid(){
        $result ='';
        if(!preg_match('/^[a-zA-Z0-9_]+$/', $this->uid)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function validEmail(){
        $result ='';
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function pwdMatch(){
        $result ='';
        if($this->pwd !== $this->pwdrepeat){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck(){
        $result ='';
        if(!$this->checkUser($this->uid,$this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

}