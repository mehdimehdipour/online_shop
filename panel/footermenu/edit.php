<?php

include_once '../functions/f-footermenu.php';
$id=$_GET['id'];

if (isset($_POST['update'])){
    $info=$_POST['info'];
    update_footermenu($id,$info);
}


$footermenu=edit_footermenu($id);
?>

<p class="title-form">ویرایش منو </p>
<form class="my-form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-9">


            <div class="widget-admin">
                <span>عنوان منو</span>
                <input class="form-control inputbig" type="text" name="info[title]" value="<?php echo $footermenu->title; ?>">
                <br>
                <span>لینک منو : </span>
                <input class="form-control inputbig" type="text" name="info[link]" value="<?php echo $footermenu->link; ?>">
            </div>
            <hr><br>


            <input type="submit" class="btn btn-primary" value="ذخیره" name="update">


        </div>


    </div>
</form>