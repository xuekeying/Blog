<?php
    $id = (int)$_GET['id'];
    require "../link/db.php";
    $sql = "delete from blog_comment where id=$id";
    $result = mysql_query($sql,$conn);
    if($result){
        require "pinglun.php";
    }else{
        echo "<script>alert('删除失败');</script>";
    }
?>