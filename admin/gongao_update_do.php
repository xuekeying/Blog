<?php
    $id = (int)$_GET['id'];
    $content = $_GET['content'];
    $modiftime = date("Y-m-d H:i:s");
    $idBtn = (int)$_GET['idBtn'];
    if($idBtn === 0){
        require "../link/db.php";
        $sql = "update blog_announcement set an_content='$content',an_modiftime='$modiftime' where id=$id";
        $result = mysql_query($sql,$conn);
        if($result){
            echo "<script>alert('修改成功!');</script>";
            require "gongao.php";
        }else{
            echo "<script>alert('修改失败!');</script>";
        }
    }
    if($idBtn === 1){
        require "gongao.php";
    }
?>