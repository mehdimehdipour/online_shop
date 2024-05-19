<?php
include_once 'connect.php';

function login($email, $password)
{

    $pdo = connect_db();

    $query = $pdo->prepare("SELECT username,email,password,accesslevel FROM users WHERE email='$email'");
    $query->execute();
    $res = $query->fetch(PDO::FETCH_OBJ);


    if ($res) {
        if ($res->password == $password) {
            session_start();
            $_SESSION['login'] = $res->username;
            if ($res->accesslevel == 1)
                header("location:panel/dashboard.php");
            else header("location:index.php");
        } else header("location:login.php?error");
    } else echo header("location:login.php?error");
}

function register($info)
{
    $username = $info['username'];
    $password = $info['password'];
    $email = $info['email'];

    $pdo = connect_db();
    $query = $pdo->prepare("INSERT INTO users (username,password,email) values ('$username','$password','$email')");
    try {
        $query->execute();
        header("location:login.php");
    } catch (Exception $e) {
        echo "<h6 style=\"color: #c80000; float: right; font-size:14px; padding:10px 25px;\">ثبت نام با خطا مواجه شد</h6>";
    }
}


?>