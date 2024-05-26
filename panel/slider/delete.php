<?php
include_once '../functions/f-slider.php';
$id=$_GET['id'];
delete_slider($id);
header("location:dashbord.php?page=list_slider&delete=ok");