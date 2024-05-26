<?php
include_once '../functions/f-category.php';
$id=$_GET['id'];
delete_category($id);
header("location:dashbord.php?page=list_category&delete=ok");