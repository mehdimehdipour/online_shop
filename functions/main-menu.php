<?php
include_once 'connect.php';
function add_menu($info)
{
//    var_dump($info);

    $title = $info['title'];
    $sort = $info['sort'];
    $parent = $info['parent'];

    if (isset($info['status']))
        $status = $info['status'];
    else $status = "off";

    $pdo=connect_db();
    $query=$pdo->prepare("INSERT INTO menu_tbl (title,sort,parent,status) values ('$title','$sort','$parent','$status')");
    $query->execute();

}