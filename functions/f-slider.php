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