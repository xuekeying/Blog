<?php
    $id = (int)$_GET['id'];
    $urlStr = $_GET['urlStr'];
    $content = $_GET['content'];
    $idBtn = (int)$_GET['idBtn'];
    if($idBtn === 0){
        require "../link/db.php";
        $sql = "update blog_recommend set url='$urlStr',content='$content' where id=$id";
        $result = mysql_query($sql,$conn);
        if($result){
            echo "<script>alert('修改成功!');</script>";
            require "tuijian.php";
        }else{
            echo "<script>alert('修改失败!');</script>";
        }
    }
    if($idBtn === 1){
        require "tuijian.php";
    }
?>