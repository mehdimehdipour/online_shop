<?php
include_once 'connect.php';

function list_takpost(){
    $pdo = connect_db();
    $query=$pdo->prepare("SELECT * FROM takpost_tbl");
    $query->execute();
    $res=$query->fetch();
    return $res;
}

function add_takpost($id,$info){

    $takpost=list_takpost();

    $title = $info['title'];
    $content = $info['content'];
    $video = $info['video'];
    $btn1 = $info['btn1'];
    $btn2 = $info['btn2'];
    if (isset($info['status'])) {
        $status = $info['status'];
    } else {
        $status = 'off';
    }

    if ($takpost['id']==""){
        $pdo = connect_db();
        $query = $pdo->prepare("INSERT INTO takpost_tbl (title,content,video,btn1,btn2,status) VALUES
('$title','$content','$video','$btn1','$btn2','$status')");
        $query->execute();
    }
    else {
        $pdo = connect_db();
        $query = $pdo->prepare("UPDATE takpost_tbl SET title='$title',content='$content',video='$video',btn1='$btn1',btn2='$btn1', status='$status' WHERE id='$id'");
        $query->execute();
    }

}

function list_info_header(){
    $pdo = connect_db();
    $query=$pdo->prepare("SELECT * FROM header_tbl");
    $query->execute();
    $res=$query->fetch();
    return $res;
}

function add_info_header($id,$info,$img){

    $header=list_info_header();

    $title = $info['title'];
    $des = $info['description'];

    if ($header['id']==""){
        $pdo = connect_db();
        $query = $pdo->prepare("INSERT INTO header_tbl (title,description,logo) VALUES
('$title','$des','$img')");
        $query->execute();
    }
    else {
        $pdo = connect_db();
        $query2 = $pdo->prepare("UPDATE header_tbl SET title='$title',description='$des',logo='$img' WHERE id='$id'");
        $query2->execute();
    }

}







function list_info_footer(){
    $pdo = connect_db();
    $query=$pdo->prepare("SELECT * FROM footer_tbl");
    $query->execute();
    $res=$query->fetch();
    return $res;
}

function add_info_footer($id,$info){

    $footer=list_info_footer();

    $aboute = $info['aboute'];
    $copyright = $info['copyright'];


    if ($footer['id']==""){
        $pdo = connect_db();
        $query = $pdo->prepare("INSERT INTO footer_tbl (aboute,copyright) VALUES
('$aboute','$copyright')");
        $query->execute();
    }
    else {
        $pdo = connect_db();
        $query = $pdo->prepare("UPDATE footer_tbl SET aboute='$aboute',copyright='$copyright' WHERE id='$id'");
        $query->execute();
    }

}


function text_message(){
    $pdo = connect_db();
    $query=$pdo->prepare("SELECT * FROM admin_message");
    $query->execute();
    $res=$query->fetch();
    return $res;
}

function add_admin_message($id,$text){

    $message=text_message();

    if ($message['id']==""){
        $pdo = connect_db();
        $query = $pdo->prepare("INSERT INTO admin_message (message) VALUES
('$text')");
        $query->execute();
    }
    else {
        $pdo = connect_db();
        $query = $pdo->prepare("UPDATE admin_message SET message='$text' WHERE id='$id'");
        $query->execute();
    }

}