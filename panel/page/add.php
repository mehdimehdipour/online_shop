<?php
include_once '../functions/f-page.php';
    if (isset($_POST['send'])){
        $info=$_POST['info'];
        add_page($info);
    }

?>


<p class="title-form">افزودن برگه جدید</p>
<form class="my-form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-9">


            <input class="form-control inputbig" type="text" name="info[title]" placeholder="عنوان را اینجا وارد کنید">
            <br>
            <textarea class="form-control" name="info[content]" rows="12"></textarea>

            <br> <hr>

            <input type="submit" class="btn btn-primary" value="ارسال" name="send">


        </div>


    </div>
</form>