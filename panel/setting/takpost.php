<?php
include_once '../functions/f-setting.php';

$takpost=list_takpost();
$id=$takpost['id'];
    if (isset($_POST['send'])){
        $info=$_POST['info'];

        add_takpost($id,$info);
    }



?>


<p class="title-form">مدیریت اطلاعات تک پست</p>
<form class="my-form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-9">


            <div class="widget-admin">
                <span>عنوان پست :</span>
                <input class="form-control inputbig" type="text" name="info[title]" value="<?php echo $takpost['title']; ?>">
                <br>
                <span>محتوا :</span>
                <textarea class="form-control" name="info[content]"><?php echo $takpost['content']; ?></textarea>
                <br>
                <span>کد ویدئو :</span>
                <textarea class="form-control" name="info[video]"><?php echo $takpost['video']; ?></textarea>
                <br>
                <span>آدرس دکمه اول :</span>
                <input class="form-control inputbig" type="text" name="info[btn1]" value="<?php echo $takpost['btn1']; ?>">
                <br>
                <span>آدرس دکمه دوم :</span>
                <input class="form-control inputbig" type="text" name="info[btn2]" value="<?php echo $takpost['btn2']; ?>">
                <br>
            </div>
            <hr><br>

            <div class="custom-control custom-switch">
                <input name="info[status]" type="checkbox" class="custom-control-input" id="customSwitch1"
                    <?php if ($takpost['status']=='on'){echo "  checked ";} ?>
                >
                <label class="custom-control-label" for="customSwitch1">فعال/غیرفعال</label>
            </div><br> <hr>

            <input type="submit" class="btn btn-primary" value="ارسال" name="send">


        </div>


    </div>
</form>
