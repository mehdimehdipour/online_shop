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
    <h1>عضویت</h1>
    <form method="post">
        <input style="margin-bottom:70px;" type="text" name="info[username]" placeholder="username" required>
        <input style="margin-bottom:70px;" type="email" name="info[email]" placeholder="Email" required>
        <input type="password" name="info[password]" placeholder="Password" required>
        <div class="signup-link">
            <p> حساب کاربری دارید؟ <a href="./login.php"> وارد شوید </a></p>
        </div>
        <!--        <button>ثبت نام</button>-->
        <input type="submit" name="send" value="ثبت نام" class="btn btn-primary">
        <?php
        include_once 'functions/fuser.php';
        if (isset($_POST['send']))
            register($_POST['info']);
        ?>
    </form>
</div>


</body>
</html>