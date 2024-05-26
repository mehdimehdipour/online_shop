<?php
include_once '../functions/f-widget.php';
    if (isset($_POST['send'])){
        $title=$_POST['title'];
        $icon=$_POST['icon'];

        add_widget($title,$icon);
    }

?>


<p class="title-form">افزودن ابزارک جدید</p>
<form class="my-form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-9">


            <div class="widget-admin">
                <span>عنوان ابزارک</span>
                <input class="form-control inputbig" type="text" name="title[0]" placeholder="عنوان را اینجا وارد کنید">
                <br>
                <span>کد svg ابزارک : </span>
                <textarea class="form-control" name="icon[0]"></textarea>
            </div>
            <hr><br>

            <div id="widget_admin">

            </div>

            <span class="btn btn-danger" onclick="add_widget()">+ افزودن ابزارک </span>
            <br><hr>

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