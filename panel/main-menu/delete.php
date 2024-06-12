<?php
include_once '../functions/main-menu.php';
$id=$_GET['id'];
delete_menu($id);
header("location:dashbord.php?page=list_menu&delete=ok");