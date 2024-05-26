<?php
include_once '../functions/f-user.php';
$id=$_GET['id'];
delete_user($id);
header("location:dashbord.php?page=list_users&delete=ok");