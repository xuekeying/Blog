<?php
    $id = (int)$_GET['id'];
    require "../link/db.php";
    $sql = "delete from blog_user where id=$id";
    $result = mysql_query($sql,$conn);
    if($result){
        require "user.php";
    }else{
        echo "<script>alert('删除失败');</script>";
    }
?>