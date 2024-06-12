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

function list_menu()
{
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM menu_tbl where parent=0");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}

function count_menu()
{
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM menu_tbl");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function list_submenu($menu)
{
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM menu_tbl WHERE parent=$menu");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}