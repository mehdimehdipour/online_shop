<?php
include_once 'functions/connect.php';
include_once 'functions/fuser.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $email = $_POST['email'];
//    $password = $_POST['password']
    login($_POST['email'], $_POST['password']);

    if (isset($_POST['remember'])) {
        setcookie('email', $_POST['email']);
        setcookie('password', $_POST['password']);
    } else {
        setcookie('email', "", 1);
        setcookie('password', "", 1);
    }
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @layer utilities {
            .bg-glass {
                background: rgba(255, 255, 255, 0.566);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.3);
            }
        }
    </style>
</head>
<body class="p-8 flex items-center justify-center min-h-screen bg-[#eef5fa]">
<div class="rounded-lg shadow-lg p-8 w-full max-w-sm bg-glass">
    <h1 class="text-2xl font-bold text-center mb-6">ورود</h1>
    <form method="post">
        <div class="mb-4">
            <input type="email" placeholder="Email" name="email"
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500" required>
        </div>
        <div class="mb-4">
            <input type="password" placeholder="Password" name="password"
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500" required>
        </div>
        <button type="submit" name="send"
                class="w-full bg-indigo-500 text-white py-2 rounded-lg hover:bg-indigo-600 transition duration-300">ورود
        </button>

    </form>
    <div class="text-center mt-4 text-sm">
        <a href="./register.php" class="text-indigo-500 hover:underline">حساب کاربری ندارید؟ ثبت نام کنید</a>
        <br>
        <br>

        <?php if (isset($_GET['error'])) echo "<p style=\"color: #b00; font-size: 14px;\">نام کاربری یا رمز ورود اشتباه است</p>"
?>
    </div>

</div>
</body>
</html>
