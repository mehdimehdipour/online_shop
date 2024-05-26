<?php
include_once '../functions/f-footermenu.php';
    if (isset($_POST['send'])) {
        $title = $_POST['title'];
        $link = $_POST['link'];

        add_footermenu($title, $link);
    }
?>


<p class="title-form">افزودن منو جدید</p>
<form class="my-form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-9">


            <div class="widget-admin">
                <span>عنوان منو</span>
                <input class="form-control inputbig" type="text" name="title[0]" placeholder="عنوان را اینجا وارد کنید">
                <br>
                <span>لینک منو : </span>
                <input class="form-control inputbig" type="text" name="link[0]" placeholder="لینک منو را اینجا وارد کنید">
            </div>
            <hr><br>

            <div id="box_menu">

            </div>

            <span class="btn btn-danger" onclick="add_menu()">+ افزودن منو </span>
            <br><hr>

            <input type="submit" class="btn btn-primary" value="ارسال" name="send">


        </div>


    </div>
</form>
<script>
    function add_menu() {
        var count=document.getElementsByClassName('count-menu').length+1;
        var widget=
            '<div class="count-menu">'+
            '<span>عنوان منو</span>'+
            '<input class="form-control inputbig" type="text" name="title['+count+']" placeholder="عنوان را اینجا وارد کنید">'+
            '<br><span>لینک منو : </span>'+
            '<input class="form-control inputbig" type="text" name="link['+count+']" placeholder="لینک منو را اینجا وارد کنید">'+
            '<hr><br></div>';

        $('#box_menu').append(widget);
    }
</script>