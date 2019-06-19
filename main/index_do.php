<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HM--首页</title>
</head>
<body>
<?php
    session_start();
    if(empty($_SESSION['userinfo']) || empty($_SESSION['userinfo']['username'])){
        //未登录，引导登录
        echo "<script>alert('你没有登录，请登录');</script>";
        require "login.php";
    }
    else{
        require "header_do.php";
        require "middle.php";
    }
?>
<script src="./js/backDis.js"><script>
</body>
</html>