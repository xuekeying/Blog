<?php
    $id = (int)$_GET['id'];
    header('Content-Type:text/html;charset=utf8');
    if($id == 0){
        require "article.php";
    }elseif($id == 1){
        require "fenlei.php";
    }elseif($id == 2){
        require "setting.php";
    }elseif($id == 3){
        require "system.php";
    }else{
        echo "<script>alert('内部错误，你没有权限!');</script>";
    }
?>