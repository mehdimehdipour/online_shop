<?php

function connect_db(){
    $username="root";
    $password="";
    $server="mysql:host=localhost;dbname=online_shop";
    try{
        $pdo= new PDO($server,$username,$password);
//        echo "connection is connected";
    }
    catch (Exception $e){
        echo "connection is failed<br>";
        echo $e->getMessage();
    }
    return $pdo;
}

?>