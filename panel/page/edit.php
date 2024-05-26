<?php

include_once '../functions/f-page.php';
$id=$_GET['id'];

if (isset($_POST['update'])){
    $info=$_POST['info'];
    update_page($id,$info);
}


$page=edit_page($id);
?>
<p class="title-form">ویرایش صفحه </p>
<form class="my-form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-9">


            <input class="form-control inputbig" type="text" name="info[title]" value="<?php echo $page->title; ?>">
            <br>
            <textarea class="form-control" name="info[content]" rows="12"><?php echo $page->content; ?></textarea>

            <br> <hr>

            <input type="submit" class="btn btn-primary" value="ذخیره" name="update">


        </div>


    </div>
</form>
