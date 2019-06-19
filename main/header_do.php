<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>头部</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="top">
        <div class="wrap-content">
            <!-- logo位置 -->
            <div class="logo"><a href=""><img src="./img/logo.png" height="30px"></a></div>
            <!-- 搜索框位置 -->
            <!-- <div class="search">
                <input type="text" placeholder="请输入文章的作者进行搜索">
            </div> -->
            <!-- 小功能图标位置 -->
            <div class="icon">
                <div class="shouye">首页</div>
                <div class="video">闪看</div>
                <div class="msg">消息</div>
            </div>
            <!-- 注册和登录按钮 -->
            <div class="sub">
                <span id="logined">
                    <?php 
                        session_start();
                        if(empty($_SESSION['userinfo']) || empty($_SESSION['userinfo']['username'])){
                            //未登录，引导登录
                            echo "<script>alert('非法操作！');</script>";
                        }
                        else{
                            echo $_SESSION['userinfo']['username'];
                        }
                    ?>
                <img src="./img/sxj.png" /></span>
                <span id="logout">退出登录</span>
                <div class="desc">
                    <p class="writeArticle">写文章</p>
                    <p id="glym">管理页面</p>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>