<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HM--管理员登录</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <p>管理员登录</p>
    <form action="" name="login" method="post" id="login" class="f1">
        <span class="s1">用户名:</span>
        <input type="text" name="username" id="username" placeholder="请输入你的用户名">
        <span class="msg" id="u1"></span><br/><br/>

        <span class="s1">密码:</span>
        <input type="password" name="password" id="password" placeholder="请输入你的密码">
        <span class="msg" id="p1"></span><br/><br/>

        <div class="btn">
            <input type="submit" name="submit" value="登录" class="btn1">
        </div>

    </form>
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/login.js"></script>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        require "../link/db.php";
        $sql = "select * from blog_user where name='$username' and password='$password' and type=0";
        $result = mysql_query($sql);
        if(mysql_fetch_row($result)){
            $_SESSION['admininfo'] = [
                'username' => $username,
                'password' => $password
            ];
            header("location:main.php");
        }
        else{
            echo "<script>alert('登录失败，请重新登录');</script>";
        }
    }
?>