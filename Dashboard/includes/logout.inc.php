<?php

session_start();

$_SESSION = array();

$_SESSION = array();


session_destroy();

header("Location: ../index.php"); 
exit();