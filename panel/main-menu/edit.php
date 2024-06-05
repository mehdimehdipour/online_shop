<?php

include_once '../functions/f-category.php';
$id=$_GET['id'];

if (isset($_POST['update'])){
    $info=$_POST['info'];
    update_category($id,$info);
}


$current_cat=edit_category($id);
foreach ($current_cat as $cat) : ?>
<p class="title-form">افزودن دسته جدید</p>
<form class="my-form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-9">


            <input class="form-control inputbig" type="text" name="info[title]" placeholder="عنوان را اینجا وارد کنید" value="<?php echo $cat->title; ?>">
            <br>

            <input class="form-control inputbig" type="text" name="info[sort]" placeholder="ترتیب نمایش را بصورت عددی وارد کنید" value="<?php echo $cat->sort; ?>">
            <br>

            <select class="form-control" name="info[parrent]">
                <option value="0">سرگروه</option>

                <?php
                    $parrent=list_category();
                    foreach ($parrent as $val) : ?>
                        <option value="<?php echo $val->id; ?>"
                        <?php if ($cat->parrent==$val->id){echo " selected ";} ?>
                        ><?php echo $val->title; ?></option>

                    <?php endforeach; ?>

            </select><br>

            <div class="custom-control custom-switch">
                <input name="info[status]" type="checkbox" class="custom-control-input" id="customSwitch1"
                <?php if ($cat->status=='on'){echo "  checked ";} ?>
                >
                <label class="custom-control-label" for="customSwitch1">فعال/غیرفعال</label>
            </div><br> <hr>

            <input type="submit" class="btn btn-primary" value="ذخیره" name="update">


        </div>


    </div>
</form>
<?php endforeach; ?>