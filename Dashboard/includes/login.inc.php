<?php
if(isset($_POST['submit']))
{
    //Grabing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    

    //Instanciate SignContr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";

    echo "Inst login contr". "<br/>";
    $login = new LoginCont($uid, $pwd);
    echo "Done login contr". "<br/>";
    //running error handlers and user login 
    echo "Done login contr". "<br/>";
    echo "begin LoginUser". "<br/>";
    $login->LoginUser();
    echo "Done LoginUser". "<br/>";

    header("location:../home.php");

}