<?php

include_once '../functions/f-user.php';
$id=$_GET['id'];
$user=edit_user($id);

if (isset($_POST['update'])){
    if (isset($_POST['password'])){
        $pass=sha1($_POST['password']);
    }
    else {
        $pass=$user->password;
    }
    $info=$_POST['info'];
    update_user($id,$info,$pass);
    header("location:".$_SERVER['REQUEST_URI']);
}



?>

<p class="title-form">ویرایش کار</p>
<form class="my-form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-9">


            <div class="widget-admin">
                <span>نام کاربری : </span>
                <input class="form-control inputbig" type="text" name="info[username]" value="<?php echo $user->username; ?>">
                <br>

                <span>ایمیل : </span>
                <input class="form-control inputbig" type="text" name="info[email]" value="<?php echo $user->email; ?>">
                <br>


                <span>سطح دسترسی : </span>
                <select name="info[role]" class="form-control">
                    <option value="admin" <?php if($user->role=='admin'){echo " selected ";} ?>>مدیر کل</option>
                    <option value="normal" <?php if($user->role=='normal'){echo " selected ";} ?>>نویسنده</option>
                </select>
                <br>


                <span>قصد تغییر رمز را دارید؟ : </span>
                <br>
                <span>تنها درصورتی که قصد تغییر رمز را دارید فیلد زیر را پر کنید</span>
                <input class="form-control inputbig" type="text" name="password">
                <br>

            </div>
            <hr><br>



            <input type="submit" class="btn btn-primary" value="ارسال" name="update">


        </div>


    </div>
</form>