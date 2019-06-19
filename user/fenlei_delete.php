<?php
    $id = (int)$_GET['id'];
    require "../link/db.php";
    $sql = "delete from blog_class where id=$id";
    $result = mysql_query($sql,$conn);
    if($result){
        echo "<script>alert('删除成功');</script>";
        require "fenlei.php";
    }else{
        echo "<script>alert('删除失败');</script>";
    }
?>