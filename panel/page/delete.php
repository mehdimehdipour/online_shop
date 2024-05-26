<?php
include_once '../functions/f-page.php';
$id=$_GET['id'];
delete_page($id);
header("location:dashbord.php?page=list_page&delete=ok");