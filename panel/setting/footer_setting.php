<?php
include_once '../functions/f-setting.php';

$footer=list_info_footer();
$id=$footer['id'];
    if (isset($_POST['send'])){
        $info=$_POST['info'];

        add_info_footer($id,$info);
        header("location:".$_SERVER['REQUEST_URI']);
    }
?>


<p class="title-form">مدیریت  اطلاعات فوتر</p>
<form class="my-form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-9">


            <div class="widget-admin">
                <span>متن درباره ما برای فوتر :</span>
                <textarea rows="6" class="form-control" name="info[aboute]"><?php echo $footer['aboute']; ?></textarea>
                <br>

                <span>متن کپی رایت :</span>
                <input class="form-control inputbig" type="text" name="info[copyright]" value="<?php echo $footer['copyright']; ?>">
                <br>

                 <hr>

            <input type="submit" class="btn btn-primary" value="ارسال" name="send">


        </div>


    </div>
</form>
