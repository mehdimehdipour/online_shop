<?php
include_once '../functions/f-footermenu.php';
$id=$_GET['id'];
delete_footermenu($id);
header("location:dashbord.php?page=list_footermenu&delete=ok");