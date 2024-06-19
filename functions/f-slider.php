<?php
include_once 'connect.php';
function add_slider($info,$img){
    $title=$info['title'];
    $url=$info['url'];
    if (isset($info['status'])) {
        $status = $info['status'];
    } else {
        $status = 'off';
    }

    $pdo = connect_db();
    $query=$pdo->prepare("INSERT INTO slider_tbl (title,url,img,status) 
    VALUES ('$title','$url','$img','$status')");
    $query->execute();
}
function list_slider(){
    $pdo = connect_db();
    $query=$pdo->prepare("SELECT * FROM slider_tbl ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function edit_slider($id){
    $pdo = connect_db();
    $query=$pdo->prepare("SELECT * FROM slider_tbl WHERE id='$id'");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function update_slider($id,$info,$img){
    $title=$info['title'];
    $url=$info['url'];
    if (isset($info['status'])) {
        $status = $info['status'];
    } else {
        $status = 'off';
    }

    $pdo = connect_db();
    $query=$pdo->prepare("UPDATE slider_tbl SET title='$title',url='$url',img='$img',status='$status' WHERE id = '$id'");
    $query->execute();
}
function delete_slider($id){
    $pdo = connect_db();

    $query2=$pdo->prepare("SELECT * FROM slider_tbl WHERE id='$id'");
    $query2->execute();
    $res=$query2->fetch(PDO::FETCH_OBJ);
    unlink($res->img);

    $query = $pdo->prepare("DELETE FROM slider_tbl WHERE id='$id'");
    $query->execute();
}