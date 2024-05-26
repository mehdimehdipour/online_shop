<?php

$_SESSION['url']="http://localhost/online_shop";
function uploader($pic,$loc){

    $name=$pic['name'];
    $nt=explode('.',$name);
    $type=end($nt);

    $tmp=$pic['tmp_name'];


    $newname=time().".".$type;


    $location=$loc.$newname;

    move_uploaded_file($tmp,$location);

    return $location;
}

function count_post(){
    $author=$_SESSION['login'];
    $pdo = connect_db();
    $query=$pdo->prepare("SELECT * FROM post_tbl WHERE author='$author'");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    $count=count($res);
    echo $count;
}

function count_comment(){
    $author=$_SESSION['login'];
    $pdo = connect_db();
    $query=$pdo->prepare("SELECT * FROM comment_tbl WHERE author='$author'");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    $count=count($res);
    echo $count;
}
function register_date(){
    $author=$_SESSION['login'];
    $pdo = connect_db();
    $query=$pdo->prepare("SELECT tarikh FROM users_tbl WHERE username='$author'");
    $query->execute();
    $res=$query->fetch();
    echo $res['tarikh'];
}

//function role_user(){
//    $author=$_SESSION['login'];
//    $pdo = connect_db();
//    $query=$pdo->prepare("SELECT role FROM users_tbl WHERE username='$author'");
//    $query->execute();
//    $res=$query->fetch();
//    return $res['role'];
//}