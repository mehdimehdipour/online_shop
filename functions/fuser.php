<?php
include_once 'connect.php';

function login($email,$password){

    $pdo=connect_db();

    $query=$pdo->prepare("SELECT username,email,password,accesslevel FROM users WHERE email='$email'");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);

    if($res) {
        if ($res->password == $password) {
            session_start();
            $_SESSION['login'] = $res -> username;
            if($res->accesslevel==1)
            header("location:panel/dashboard.php");
            else header("location:index.php");
        } else echo "<h6 style=\"color: #c80000; float: left; font-size:14px; padding:10px 25px;\">نام کاربری یا رمز ورود اشتباه است</h6>";
    }
    else echo "<h6 style=\"color: #c80000; float: left; font-size:14px; padding:10px 25px;\">نام کاربری یا رمز ورود اشتباه است</h6>";

}



?>