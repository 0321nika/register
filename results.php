<?php
    $userName = $_POST["user_name"];
    $userPassword = $_POST["user_password"];

    if(empty($userName)){
        $name_error = "PLEASE INSERT YOUR USERNAME";
    }elseif (strlen($userName) < 6){
        $name_error = "YOUR USERNAME NEEDS TO HAVE 6 SYMBOLS";
    }



    if(empty($userPassword)){
        $password_error = "PLEASE INSERT YOUR PASSWORD";
    }elseif (strlen($userPassword) < 6){
        $password_error = "YOUR PASSWORD NEEDS TO HAVE 6 SYMBOLS";
    }
    if(empty($name_error) && empty($password_error)){
        include ("success.php");
    }else{
        include("index.php");
    }
?>
 