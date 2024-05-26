<?php
include_once '../functions/f-setting.php';

$header=list_info_header();
$id=$header['id'];
    if (isset($_POST['send'])){

        include_once '../functions/functions.php';
        $pic=$_FILES['logo'];

        if (!$pic['name']==""){
            $img=uploader($pic,"../uploads/header/");
        }
        else {
            $img=$_SESSION['url']."img/logo.png";
        }

        $info=$_POST['info'];
        add_info_header($id,$info,$img);
        header("location:".$_SERVER['REQUEST_URI']);
    }



?>


<p class="title-form">مدیریت اطلاعات تک پست</p>
<form class="my-form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-9">


            <div class="widget-admin">
                <span>عنوان سایت :</span>
                <input class="form-control inputbig" type="text" name="info[title]" value="<?php echo $header['title']; ?>">
                <br>
                <span>توضیحات وبسایت :</span>
                <textarea class="form-control" name="info[description]"><?php echo $header['description']; ?></textarea>
                <br>
                <span>لوگوی وبسایت :</span>
                <div class="custom-file">
                    <br><br>
                    <img src="<?php echo $header['logo']; ?>" >
                    <hr>
                    <input type="file" class="custom-file-input" id="customFile" name="logo">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <br>
            </div>
            <br>

            <input type="submit" class="btn btn-primary" value="ارسال" name="send">


        </div>


    </div>
</form>
