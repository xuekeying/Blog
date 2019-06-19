<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HM--用户注册</title>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <p>用户注册</p>
    <form action="#" name="f1" method="POST" class="f1" id="f1">
        <span class="s1">用户名:</span>
        <input type="text" name="username" id="username" placeholder="请输入你的用户名">
        <span class="msg" id="u1"></span><br/><br/>

        <span class="s1">邮箱:</span>
        <input type="text" name="email" id="email" placeholder="请输入你的邮箱">
        <span class="msg" id="e1"></span><br/><br/>

        <span class="s1">密码:</span>
        <input type="password" name="password" id="password" placeholder="请输入你的密码">
        <span class="msg" id="p1"></span><br/><br/>

        <span class="s1">确认密码:</span>
        <input type="password" name="repassword" id="repassword" placeholder="请再次输入你的密码">
        <span class="msg" id="p2"></span><br/><br/>

        <span class="s1">性别:</span>
        <input type="radio" name="sex" value="男">男
        <input type="radio" name="sex" value="女">女<br/><br/>

        <div class="btn">
            <input type="submit" name="submit" class="btn1" id="btn1" value="提交">
            <input type="reset" class="btn2" id="btn2" value="重置">
        </div>
    </form>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/register.js"></script>
</body>
</html>

<?php
    if (isset($_POST['submit'])){
        if($_POST['username'] == NULL){
            echo "<script>alert('输入的用户名不能为空');</script>";
        }
        elseif($_POST['email'] == NULL){
            echo "<script>alert('输入的邮箱不能为空');</script>";
        }
        elseif($_POST['password'] == NULL){
            echo "<script>alert('输入的密码不能为空');</script>";
        }
        elseif($_POST['repassword'] == NULL){
            echo "<script>alert('重复密码不能为空');</script>";
        }

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sex = $_POST['sex'];

        if($username != NULL){
            require "../link/db.php";
            $sql = "insert into blog_user values(null,'$username','$password','$email','$sex',1)";
            $res = mysql_query($sql);
            if($res){
                echo "<script>alert('注册成功');</script>";
                header("location:login.php");
            }
            else
                echo "<script>alert('注册失败,用户名已存在');</script>";
        }
        else{
            echo "<script>alert('非法操作，请重试!');</script>";
        }

    }
?>