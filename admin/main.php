<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HM--管理员主页</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="top">
        <div class="wrap-content">
            <!-- logo位置 -->
            <div class="logo"><a href=""><img src="./img/logo.png" height="30px"></a></div>
            <!-- 搜索框位置 -->
            <div class="search">
                <input type="text" placeholder="请输入文章的作者进行搜索">
                <button id="search">搜索</button>
            </div>
            <!-- 注册和登录按钮 -->
            <div class="sub">
                <span id="logined">
                    <?php
                        session_start();
                        if(empty($_SESSION['admininfo']) || empty($_SESSION['admininfo']['username'])){
                            //未登录，引导登录
                            echo "<script>alert('你没有登录，请登录');</script>";
                            header("location:login.php");
                        }
                        else{
                            echo $_SESSION['admininfo']['username'];
                        }
                    ?>
                    <img src="./img/sxj.png" />
                </span>
                <span id="logout">&nbsp;&nbsp;&nbsp;&nbsp;退出登录</span>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="left">
                <div class="left-link link active">
                    <img class="pic" src="./img/wenzhang.png">
                    文章
                </div>
                <div class="left-link link">
                    <img class="pic" src="./img/gonggao.png">
                    公告
                </div>
                <div class="left-link link">
                    <img class="pic" src="./img/pinglun.png">
                    评论
                </div>
                <div class="left-link link">
                    <img class="pic" src="./img/fenlei.png">
                    分类
                </div>
                <div class="left-link link">
                    <img class="pic" src="./img/qita.png">
                    推荐
                </div>
                <div class="left-link link">
                    <img class="pic" src="./img/yonghu.png">
                    用户
                </div>
                <div class="left-link link">
                    <img class="pic" src="./img/shezhi.png">
                    设置
                </div>
                <div class="left-link link">
                    <img class="pic" src="./img/gaishu.png">
                    概述
                </div>
            </div>
            <div class="content-wrap">
                <!-- 系统信息 -->
                <div class="system">
                    <?php require "article.php";?>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <p>西南科技大学城市学院 工程技术学院 计科1603 薛科颖提供技术支持</p>
    </div>
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/search.js"></script>
</body>
</html>