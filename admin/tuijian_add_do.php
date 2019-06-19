<?php
    $id = (int)$_GET['id'];
    $urlStr = $_GET['urlStr'];
    $content = $_GET['content'];
    $idBtn = (int)$_GET['idBtn'];
    if($idBtn === 0){
        require "../link/db.php";
        $sql = "insert into blog_recommend values(null,'$urlStr','$content')";
        $result = mysql_query($sql,$conn);
        if($result){
            echo "<script>alert('增加成功!');</script>";
            require "tuijian.php";
        }else{
            echo "<script>alert('增加失败!');</script>";
        }
    }
    if($idBtn === 1){
        require "tuijian.php";
    }
?>