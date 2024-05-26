<?php
include_once '../functions/f-user.php';

if (isset($_POST['send'])){
    $info=$_POST['info'];
    register_user($info);
}
?>


<p class="title-form">افزودن کاربر جدید</p>
<form class="my-form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-9">


            <div class="widget-admin">
                <span>نام کاربری : </span>
                <input class="form-control inputbig" type="text" name="info[username]" placeholder="نام کابری را اینجا وارد کنید">
                <br>

                <span>ایمیل : </span>
                <input class="form-control inputbig" type="text" name="info[email]" placeholder="ایمیل را اینجا وارد کنید">
                <br>

                <span>رمز عبور : </span>
                <input class="form-control inputbig" type="text" name="info[password]" placeholder="رمز را اینجا وارد کنید">
                <br>

                <span>سطح دسترسی : </span>
                <select name="info[role]" class="form-control">
                    <option value="admin">مدیر کل</option>
                    <option value="normal">نویسنده</option>
                </select>
                
            </div>
            <hr><br>



            <input type="submit" class="btn btn-primary" value="ارسال" name="send">


        </div>


    </div>
</form>
<script>
    function add_widget() {
        var count=document.getElementsByClassName('count-widget').length+1;
        var widget=
            '<div class="count-widget">'+
            '<span>عنوان ابزارک</span>'+
            '<input class="form-control inputbig" type="text" name="title['+count+']" placeholder="عنوان را اینجا وارد کنید">'+
            '<br><span>کد svg ابزارک : </span>'+
            '<textarea class="form-control" name="icon['+count+']"></textarea>'+
            '<hr><br></div>';

        $('#widget_admin').append(widget);
    }
</script>