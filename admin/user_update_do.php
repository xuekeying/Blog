<?php
    $id = (int)$_GET['id'];
    $username = $_GET['username'];
    $password = $_GET['password'];
    $email = $_GET['email'];
    $sex = $_GET['sex'];
    $type = (int)$_GET['type'];
    $idBtn = (int)$_GET['idBtn'];
    if($idBtn === 0){
        require "../link/db.php";
        $sql = "update blog_user set name='$username',password='$password',email='$email',sex='$sex',type=$type where id=$id";
        $result = mysql_query($sql,$conn);
        if($result){
            echo "<script>alert('修改成功!');</script>";
            require "user.php";
        }else{
            echo "<script>alert('修改失败!');</script>";
        }
    }
    if($idBtn === 1){
        require "user.php";
    }
?>