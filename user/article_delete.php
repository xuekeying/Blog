<?php
    $id = (int)$_GET['id'];
    require "../link/db.php";
    $sql = "delete from blog_article where id=$id";
    $result = mysql_query($sql,$conn);
    if($result){
        echo "<script>alert('删除成功');</script>";
        require "article.php";
    }else{
        echo "<script>alert('删除失败');</script>";
    }
?>