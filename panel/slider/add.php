<?php

if (isset($_POST['send'])){

    include_once '../functions/functions.php';
    $pic=$_FILES['picslider'];
    $img=uploader($pic,"../uploads/slider/");

    $info=$_POST['info'];
    include_once '../functions/f-slider.php';
    add_slider($info,$img);

}

?>


<p class="title-form">افزودن دسته جدید</p>
<form class="my-form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-9">


            <input class="form-control inputbig" type="text" name="info[title]" placeholder="عنوان را اینجا وارد کنید">
            <br>

            <input class="form-control inputbig" type="text" name="info[url]" placeholder="url">
            <br>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="picslider">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <br>
            <br>

            <div class="custom-control custom-switch">
                <input name="info[status]" type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                <label class="custom-control-label" for="customSwitch1">فعال/غیرفعال</label>
            </div><br> <hr>

            <input type="submit" class="btn btn-primary" value="ارسال" name="send">


        </div>


    </div>
</form>