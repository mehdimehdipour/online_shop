<?php
include_once '../functions/f-post.php';
$id=$_GET['id'];
delete_post($id);
header("location:dashbord.php?page=list_post&delete=ok");