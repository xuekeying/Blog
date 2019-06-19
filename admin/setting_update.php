<?php
    $id = (int)$_GET['id'];
    $username = $_GET['username'];
    $password = $_GET['password'];
    $email = $_GET['email'];
    $sex = $_GET['sex'];
    require "../link/db.php";
    $sql = "update blog_user set email='$email',sex='$sex' where id=$id";
    $result = mysql_query($sql,$conn);
    if($result){
        echo "<script>alert('修改成功!');</script>";
        require "setting.php";
    }else{
        echo "<script>alert('修改失败!');</script>";
    }
?>