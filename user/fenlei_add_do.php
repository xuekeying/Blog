<?php
    $classType = $_GET['classType'];
    $idBtn = (int)$_GET['idBtn'];
    if($idBtn === 0){
        require "../link/db.php";
        $sql = "insert into blog_class values(null,'$classType')";
        $result = mysql_query($sql,$conn);
        if($result){
            echo "<script>alert('添加成功!');</script>";
            require "fenlei.php";
        }else{
            echo "<script>alert('添加失败!');</script>";
        }
    }
    if($idBtn === 1){
        require "fenlei.php";
    }
?>