<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/bootstrap.min.css">
    <title></title>

    <style>
        body {
            background-color: rgb(230, 207, 211);
            direction: rtl;
        }

        #container1 {
            width: 990px;
            height: 800px;
            line-height: 10px;
            word-spacing: 10px;
            margin: 0px 300px;
            padding: 35px;
            text-align: center;
            border: 18px solid round;
            background-color: rgb(253, 200, 218);
            background-size: cover;
            border-radius: 20px;
        }

        h2 {
            text-align: center;
            color: white;
            font-weight: bolder;
        }

        form {
            display: block;
            background-color: rgb(248, 236, 238);
            border-radius: 3%;
            width: 750px;
            height: 600px;
            text-align: center;
            float: unset;
            position: fixed;
            margin: 20px 80px 20px 100px;

        }

        input {
            width: 500px;
            height: 30px;
            line-height: 5px;
            margin-bottom: 10px;
            margin-top: 35px;
            border-radius: 10px;
            text-align: right;
            border: 0px solid rgba(234, 229, 229, 0.898);
        }

        #butt {
            background-color: azure;
            width: 100px;
        }

    </style>

</head>
<body>

<div id="container1">
    <!--         <H1>(  فرم عضویت  )</H1>
     -->
    <form>
        <input type="username" placeholder="نام کاربر"/>
        <input type="password" placeholder="رمز عبور"/>
        <input type="date" placeholder="تاریخ عضویت شما"/>
        <input type="text" placeholder="استان محل زندگی"/>
        <input type="email" placeholder="ایمیل"/>
        <input type="text" placeholder="رنگ مورد علاقه">
        <input type="text " placeholder="سبک لباس مورد علاقه ">
        <br>

        <button class="btn btn-lg " style="background-color: plum; margin-top: 30px;">
            ارسال
        </button>
    </form>

</div>
</body>
</html>