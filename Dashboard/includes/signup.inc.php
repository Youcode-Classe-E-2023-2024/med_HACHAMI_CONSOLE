<?php
if(isset($_POST['submit']))
{
    //Grabing the data
    $uid = $_POST['uid'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwdrepeat = $_POST['pwdrepeat'];

    //Instanciate SignContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    
    $signUp = new SignupCont($uid, $pwd, $pwdrepeat , $email);
    
    //running error handlers and user signup 
    
    $signUp->signUpUser();
    

}