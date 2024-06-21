<?php
include_once 'connect.php';
function add_category($info)
{
    $title = $info['title'];
    $sort = $info['sort'];

    if (isset($info['status']))
        $status = $info['status'];
    else $status = "off";

    $pdo = connect_db();
    $query = $pdo->prepare("INSERT INTO category_tbl (title,sort,status) values ('$title','$sort','$status')");
    $query->execute();

}

function list_category()
{
    $pdo = connect_db();
    $query = $pdo->prepare("SELECT * FROM category_tbl ");
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}

function count_category()
{
    $pdo = connect_db();
    $query = $pdo->prepare("SELECT * FROM category_tbl");
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}


function edit_category($id)
{
    $pdo = connect_db();
    $query = $pdo->prepare("SELECT * FROM category_tbl WHERE id='$id'");
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}

function update_category($id,$info)
{
    $title = $info['title'];
    $sort = $info['sort'];

    if (isset($info['status']))
        $status = $info['status'];
    else $status = "off";

    $pdo = connect_db();
    $query = $pdo->prepare("UPDATE category_tbl SET title='$title', sort='$sort', status='$status' where id='$id'");
    $query->execute();
}

function delete_category($id)
{
    $pdo=connect_db();
    $query=$pdo->prepare("DELETE FROM category_tbl WHERE id='$id'");
    $query->execute();
}

function show_category()
{
    $pdo = connect_db();
    $query = $pdo->prepare("SELECT * FROM category_tbl where status=1");
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}

