<?php
include_once '../functions/main-menu.php';
    if (isset($_POST['send'])){
        $info=$_POST['info'];
        add_menu($info);
    }

?>


<p class="title-form">افزودن منو جدید</p>
<form class="my-form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-9">


            <input class="form-control inputbig" type="text" name="info[title]" placeholder="عنوان را اینجا وارد کنید">
            <br>

            <input class="form-control inputbig" type="text" name="info[sort]" placeholder="ترتیب نمایش را بصورت عددی وارد کنید">
            <br>

            <select class="form-control" name="info[parent]">
                <option value="0">سرگروه</option>

                <?php
                    $parent=list_menu();
                    foreach ($parent as $val) : ?>
                        <option value="<?php echo $val->id; ?>"><?php echo $val->title; ?></option>

                    <?php endforeach; ?>



            </select><br>

            <div class="custom-control custom-switch">
                <input name="info[status]" type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                <label class="custom-control-label" for="customSwitch1">فعال/غیرفعال</label>
            </div><br> <hr>

            <input type="submit" class="btn btn-primary" value="ارسال" name="send">


        </div>


    </div>
</form>