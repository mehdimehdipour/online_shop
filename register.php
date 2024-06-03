<?php
include_once 'functions/connect.php';
include_once 'functions/fuser.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    register($_POST['info']);

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
        @layer utilities{
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
        <h1 class="text-2xl font-bold text-center mb-6">ثبت نام</h1>
        <form method="post">
            <div class="mb-4">
                <input type="text" name="info[username]" placeholder="Username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500" required>
            </div>
            <div class="mb-4">
                <input type="email" name="info[email]" placeholder="Email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500" required>
            </div>
            <div class="mb-4">
                <input type="password" name="info[password]" placeholder="Password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500" required>
            </div>
            <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-lg hover:bg-indigo-600 transition duration-300">ثبت نام</button>
        </form>
        <div class="text-center mt-4 text-sm">
            <a href="./login.php" class="text-indigo-500 hover:underline">حساب کاربری دارید؟ ورود کنید</a>
        </div>
    </div>
</body>
</html>