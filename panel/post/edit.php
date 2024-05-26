<?php
$id=$_GET['id'];
include_once '../functions/f-post.php';
$post=edit_post($id);

if (isset($_POST['update'])){
    include_once '../functions/functions.php';
    $pic=$_FILES['thumbnail'];

    if (!$pic['name']==""){
        $img=uploader($pic,"../uploads/");
    }
    else {
        $img=$post->img;
    }


    $info=$_POST['info'];
    $cat=$_POST['cat'];
    update_post($id,$info,$cat,$img);
    header("location:".$_SERVER['REQUEST_URI']);
}

?>

<div class="row">

    <div class="col-md-12">
        <p class="title-form">ویرایش نوشته </p>
        <form class="my-form" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-9">


                    <input class="form-control inputbig" type="text" name="info[title]" placeholder="عنوان را اینجا وارد کنید" value="<?php echo $post->title; ?>">

                    <br>
                    <textarea class="form-control" name="info[body]" id="body" aria-hidden="true" rows="12"><?php echo $post->text; ?></textarea>

                    <br>


                </div>

                <div class="col-md-3">

                    <div class="box-widget">
                        <h5>انتشار : </h5>
                        <button class="btn btn-primary" type="submit" name="update">
                            ذخیره پست
                        </button>
                    </div>


                    <div class="box-widget">
                        <h5>دسته : </h5>

                        <?php
                        $categories=list_category_post();
                        foreach ($categories as $category):?>
                        <div class="custom-control custom-checkbox">
                            <div class="boxcheck">
                                <input name="cat[]" value="<?php echo $category->id; ?>" type="checkbox"
                                       class="custom-control-input" id="<?php echo $category->id; ?>"

                                    <?php if (strpos($post->cat_id,$category->id) !== false ) {echo " checked ";} ?>
                                >
                                <label class="custom-control-label" for="<?php echo $category->id; ?>"><?php echo $category->title;?></label>


                                <?php
                                $subcat=list_subcategory_post($category->id);
                                foreach ($subcat as $val) : ?>
                                <div class="custom-control custom-checkbox ">
                                    <div class="boxcheck">
                                        <svg class="bi bi-arrow-return-left" width="1em"
                                             height="1em" viewBox="0 0 16 16"
                                             fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z"
                                                  clip-rule="evenodd"></path>
                                            <path fill-rule="evenodd"
                                                  d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <input name="cat[]" value="<?php echo $val->id; ?>" type="checkbox"
                                               class="custom-control-input" id="<?php echo $val->id; ?>"
                                                <?php if (strpos($post->cat_id,$val->id) !== false ) {echo " checked ";} ?>
                                        >
                                        <label class="custom-control-label"
                                               for="<?php echo $val->id; ?>"><?php echo $val->title; ?></label>
                                    </div>
                                </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                        <?php endforeach; ?>


                    </div>





                    <div class="box-widget">
                        <h5>تصویر شاخص</h5>
                        <img src="<?php echo $post->img; ?>" width="100%" height="100%">
                        <hr>
                        <input type="file" name="thumbnail">
                    </div>

                </div>

            </div>
        </form>
    </div>

</div>