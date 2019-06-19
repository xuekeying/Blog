<?php
    $id = (int)$_GET['id'];
    $content = $_GET['content'];
    $author = $_GET['author'];
    $articleId = (int)$_GET['articleId'];
    $idBtn = (int)$_GET['idBtn'];
    if($idBtn === 0){
        require "../link/db.php";
        $sql = "update blog_comment set comment_content='$content',author='$author',article_id=$articleId where id=$id";
        $result = mysql_query($sql,$conn);
        if($result){
            echo "<script>alert('修改成功!');</script>";
            require "pinglun.php";
        }else{
            echo "<script>alert('修改失败!');</script>";
        }
    }
    if($idBtn === 1){
        require "pinglun.php";
    }
?>