<?php
ob_start();
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.php?AccessDenide");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="topmenu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="../">نمایش سایت</a>
                <a class="btn btn-danger" href="../functions/logout.php">خروج</a>

            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="admin-container">
        <div class="row">
            <?php include_once 'dashbord-menu.php'; ?>

            <div class="col-md-10">
                <div class="content-panel">
                    <div class="container-fluid">

                        <?php
                        if (isset($_GET['page'])) {

                            switch ($_GET['page']) {

                                case 'add_menu' :
                                    include_once 'main-menu/add.php';
                                    break;

                                case 'list_menu' :
                                    include_once 'main-menu/list.php';
                                    break;

                                case 'edit_menu' :
                                    include_once 'main-menu/edit.php';
                                    break;

//                                case 'delete_menu' :
//                                    include_once 'main-menu/delete.php';
//                                    break;


                                case 'add_category' :
                                    include_once 'category/add.php';
                                    break;

                                case 'list_category' :
                                    include_once 'category/list.php';
                                    break;

                                case 'edit_cat' :
                                    include_once 'category/edit.php';
                                    break;

                                case 'delete_cat' :
                                    include_once 'category/delete.php';
                                    break;

                                case 'add_post' :
                                    include_once 'post/add.php';
                                    break;

                                case 'list_post' :
                                    include_once 'post/list.php';
                                    break;

                                case 'edit_post' :
                                    include_once 'post/edit.php';
                                    break;

                                case 'delete_post' :
                                    include_once 'post/delete.php';
                                    break;

                                case 'list_slider' :
                                    include_once 'slider/list.php';
                                    break;

                                case 'add_slider' :
                                    include_once 'slider/add.php';
                                    break;

                                case 'edit_slider' :
                                    include_once 'slider/edit.php';
                                    break;

                                case 'delete_slider' :
                                    include_once 'slider/delete.php';
                                    break;

                                case 'list_widget' :
                                    include_once 'widget/list.php';
                                    break;

                                case 'add_widget' :
                                    include_once 'widget/add.php';
                                    break;

                                case 'edit_widget' :
                                    include_once 'widget/edit.php';
                                    break;

                                case 'delete_widget' :
                                    include_once 'widget/delete.php';
                                    break;

                                case 'add_page' :
                                    include_once 'page/add.php';
                                    break;

                                case 'list_page' :
                                    include_once 'page/list.php';
                                    break;

                                case 'edit_page' :
                                    include_once 'page/edit.php';
                                    break;

                                case 'delete_page' :
                                    include_once 'page/delete.php';
                                    break;

                                case 'takpost' :
                                    include_once 'setting/takpost.php';
                                    break;

                                case 'header' :
                                    include_once 'setting/header_setting.php';
                                    break;

                                case 'footer' :
                                    include_once 'setting/footer_setting.php';
                                    break;

                                case 'admin_message' :
                                    include_once 'setting/admin_message.php';
                                    break;

                                case 'add_footermenu' :
                                    include_once 'footermenu/add.php';
                                    break;

                                case 'list_footermenu' :
                                    include_once 'footermenu/list.php';
                                    break;

                                case 'edit_footermenu' :
                                    include_once 'footermenu/edit.php';
                                    break;

                                case 'delete_footermenu' :
                                    include_once 'footermenu/delete.php';
                                    break;

                                case 'add_user' :
                                    include_once 'user/add.php';
                                    break;

                                case 'list_users' :
                                    include_once 'user/list.php';
                                    break;

                                case 'edit_user' :
                                    include_once 'user/edit.php';
                                    break;

                                case 'delete_user' :
                                    include_once 'user/delete.php';
                                    break;

                            }

                        } else {
                            include_once 'main-dashbord.php';
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector: 'textarea'});</script>
</body>
</html>