<?php
include_once '../functions/f-widget.php';
$id=$_GET['id'];
delete_widget($id);
header("location:dashbord.php?page=list_widget&delete=ok");