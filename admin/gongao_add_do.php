<?php
    $content = $_GET['content'];
    $createtime = date("Y-m-d H:i:s");
    $modiftime = date("Y-m-d H:i:s");
    $idBtn= (int)$_GET['idBtn'];
    if($idBtn === 0){
        require "../link/db.php";
        $sql = "insert into blog_announcement values(null,'$content','$createtime','$modiftime')";
        $result = mysql_query($sql,$conn);
        if($result){
            // echo "<script>alert('增加成功!');</script>";
            require "gongao.php";
        }else{
            echo "<script>alert('增加失败!');</script>";
        }
    }
    if($idBtn === 1){
        require "gongao.php";
    }
?>