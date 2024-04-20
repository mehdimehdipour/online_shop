<?php include_once 'functions/connect.php';
include_once 'functions/fuser.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>ورود</h1>
    <form method="post">
        <input style="margin-bottom:70px;" type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <div class="signup-link">
            <p> حساب کاربری ندارید؟ <a href="./register.php"> ثبت نام کنید </a></p>
        </div>
        <!--    <button>ورود</button>-->
        <input type="submit" name="send" value="ورود" class="btn btn-primary">
        <?php
        if(isset($_POST['send']))
            login($_POST['email'],$_POST['password']);

        if(isset($_POST['remember']))
        {
            setcookie('email',$_POST['email']);
            setcookie('password',$_POST['password']);
        }
        else{
            setcookie('email',"",1);
            setcookie('password',"",1);
        }

        ?>
    </form>
</div>
</body>
</html>