<?php
    $id = (int)$_GET['id'];
    $content = $_GET['content'];
    session_start();
    $author = $_SESSION['userinfo']['username'];
    if($content == NULL){
        echo "<script>alert('评论失败，请重试！');</script>";
        // header('location:index_do.php');
        require "index_do.php";
    }
    else{
        require "../link/db.php";
        $sql = "insert into blog_comment values(null,'$content','$author',$id)";
        $result = mysql_query($sql,$conn);
        if($result){
            require "read.php";
        }
        else{
            echo "<script>alert('评论失败，请重试！');</script>";
        }
    }
?>