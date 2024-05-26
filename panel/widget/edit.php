<?php

include_once '../functions/f-widget.php';
$id=$_GET['id'];

if (isset($_POST['update'])){
    $info=$_POST['info'];
    update_widget($id,$info);
}


$widget=edit_widget($id);
?>

<p class="title-form">افزودن ابزارک جدید</p>
<form class="my-form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-9">


            <div class="widget-admin">
                <span>عنوان ابزارک</span>
                <input class="form-control inputbig" type="text" name="info[title]" value="<?php echo $widget->title;?>">
                <br>
                <span>کد svg ابزارک : </span>
                <textarea style="direction: ltr; text-align: left;" class="form-control" name="info[icon]"><?php echo $widget->icon;?></textarea>
            </div>
            <hr><br>

            <input type="submit" class="btn btn-primary" value="ذخیره" name="update">


        </div>


    </div>
</form>