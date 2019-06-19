<?php
    $content = $_GET['content'];
    $autor = $_GET['author'];
    $aticleId = (int)$_GET['articleId'];
    $idBtn= (int)$_GET['idBtn'];
    if($idBtn === 0){
        require "../link/db.php";
        $sql = "insert into blog_comment values(null,'$content','$autor',$aticleId)";
        $result = mysql_query($sql,$conn);
        if($result){
            // echo "<script>alert('增加成功!');</script>";
            require "pinglun.php";
        }else{
            echo "<script>alert('增加失败!');</script>";
        }
    }
    if($idBtn === 1){
        require "pinglun.php";
    }
?>