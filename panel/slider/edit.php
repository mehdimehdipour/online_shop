<?php
$id=$_GET['id'];
include_once '../functions/f-slider.php';
$slider=edit_slider($id);

if (isset($_POST['update'])){
    include_once '../functions/functions.php';
    $pic=$_FILES['picslider'];

    if (!$pic['name']==""){
        $img=uploader($pic,"../uploads/slider/");
    }
    else {
        $img=$slider->img;
    }


    $info=$_POST['info'];
    update_slider($id,$info,$img);
    header("location:".$_SERVER['REQUEST_URI']);
}

?>

<p class="title-form">افزودن دسته جدید</p>
    <form class="my-form" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-9">


                <input class="form-control inputbig" type="text" name="info[title]" value="<?php echo $slider->title; ?>">
                <br>

                <input class="form-control inputbig" type="text" name="info[url]" value="<?php echo $slider->url; ?>">
                <br>
                <div class="custom-file">
                    <br><br>
                    <img src="<?php echo $slider->img; ?>" width="100%" >
                    <hr>
                    <input type="file" class="custom-file-input" id="customFile" name="picslider">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <br>
                <br>

                <div class="custom-control custom-switch">
                    <input name="info[status]" type="checkbox" class="custom-control-input" id="customSwitch1"
                        <?php if ($slider->status=='on'){echo "  checked ";} ?>
                    >
                    <label class="custom-control-label" for="customSwitch1">فعال/غیرفعال</label>
                </div><br> <hr>

                <input type="submit" class="btn btn-primary" value="ذخیره" name="update">


            </div>


        </div>
    </form>