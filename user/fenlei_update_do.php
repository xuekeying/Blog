<?php
    $id = (int)$_GET['id'];
    $classType = $_GET['classType'];
    $idBtn = (int)$_GET['idBtn'];
    if($idBtn === 0){
        require "../link/db.php";
        $sql = "update blog_class set class='$classType' where id=$id";
        $result = mysql_query($sql,$conn);
        if($result){
            echo "<script>alert('修改成功!');</script>";
            require "fenlei.php";
        }else{
            echo "<script>alert('修改失败!');</script>";
        }
    }
    if($idBtn === 1){
        require "fenlei.php";
    }
?>