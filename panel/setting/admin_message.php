<?php
include_once '../functions/f-setting.php';

$message=text_message();
$id=$message['id'];
    if (isset($_POST['send'])){
        $text=$_POST['message'];

        add_admin_message($id,$text);
        header("location:".$_SERVER['REQUEST_URI']);
    }
?>


<p class="title-form">پیام مدیریت</p>
<form class="my-form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-9">

                <span>پیام مدیریت :</span>
                <textarea class="form-control" name="message"><?php echo $message['message']; ?></textarea>
                <br> <hr>

            <input type="submit" class="btn btn-primary" value="ارسال" name="send">


        </div>


    </div>
</form>
