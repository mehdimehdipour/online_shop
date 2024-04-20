<?php
ob_start();
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

                <a class="btn btn-primary" href="">نمایش سایت</a>
                <a class="btn btn-danger" href="functions/logout.php">خروج</a>

            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="admin-container">
        <div class="row">
            <?php include_once 'dashboard-menu.php' ?>
            <div class="col-md-10">
                <div class="content-panel">
                    <div class="container-fluid">

                        <?php
                        if (isset($_GET['page']))
                            switch ($_GET['page']){
                                case 'add-category': include_once "category/add.php";
                                    break;
                                case 'list-category': include_once "category/list.php";
                                    break;
                                case 'edit_cat': include_once "category/edit.php";
                                    break;
                                case 'delete_cat': include_once "category/delete.php";
                                    break;
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
</body>
</html>