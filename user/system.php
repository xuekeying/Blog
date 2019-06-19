<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>系统信息</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="right">
        <div class="title">信息总览</div>
        <!-- 分割线 -->
        <div class="line"></div>
        <div class="wrap-content">
            <div class="wrap-content-desc">
                <p>文章</p>
                <p class="num">
                    <?php
                        require "../link/db.php";
                        $sql = "select count(*) from blog_article";
                        $result = mysql_query($sql);
                        while($res = mysql_fetch_array($result)){
                            echo $res['count(*)'];
                        }
                        mysql_close($conn);
                    ?>条</p>
            </div>

            <div class="wrap-content-desc">
                <p>公告</p>
                <p class="num">
                    <?php
                        require "../link/db.php";
                        $sql = "select count(*) from blog_announcement";
                        $result = mysql_query($sql);
                        while($res = mysql_fetch_array($result)){
                            echo $res['count(*)'];
                        } mysql_close($conn);?>条</p>
            </div>

            <div class="wrap-content-desc">
                <p>评论</p>
                <p class="num">
                    <?php
                        require "../link/db.php";
                        $sql = "select count(*) from blog_comment";
                        $result = mysql_query($sql);
                        while($res = mysql_fetch_array($result)){
                            echo $res['count(*)'];
                        } mysql_close($conn);?>条</p>
            </div>

            <div class="wrap-content-desc">
                <p>分类</p>
                <p class="num">
                    <?php
                        require "../link/db.php";
                        $sql = "select count(*) from blog_class";
                        $result = mysql_query($sql);
                        while($res = mysql_fetch_array($result)){
                            echo $res['count(*)'];
                        } mysql_close($conn);?>个</p>
            </div>
        </div>

        <div class="title">系统信息</div>
        <!-- 分割线 -->
        <div class="line"></div>
        <div class="system-content">
            <div class="system-content-wrap">
                <div class="system-content-wrap-desc">&nbsp;&nbsp;管理员:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                        require "../link/db.php";
                        $sql = "select count(*) from blog_user where type=0";
                        $result = mysql_query($sql);
                        while($res = mysql_fetch_array($result)){
                            echo $res['count(*)'];
                        }
                    ?>
                    人</div>
                <div class="system-content-wrap-desc">服务器软件:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SERVER["SERVER_SOFTWARE"]?></div>
            </div>

            <div class="system-content-wrap">
                <div class="system-content-wrap-desc">&nbsp;&nbsp;浏览器:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php   
                        $string = $_SERVER["HTTP_USER_AGENT"];
                        echo substr($string,80,20);
                    ?>
                </div>
                <div class="system-content-wrap-desc">PHP版本:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php   
                        $string = $_SERVER["SERVER_SOFTWARE"];
                        echo substr($string,36);
                    ?>
                </div>
            </div>

            <div class="system-content-wrap">
                <div class="system-content-wrap-desc">&nbsp;&nbsp;操作系统:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php   
                        $string = $_SERVER["HTTP_USER_AGENT"];
                        echo substr($string,13,15);
                    ?>
                </div>
                <div class="system-content-wrap-desc">PHP运行方式:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1人</div>
            </div>

            <div class="system-content-wrap">
                <div class="system-content-wrap-desc">&nbsp;&nbsp;登录者IP:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?echo
                        $_SERVER['REMOTE_ADDR'];
                    ?>
                </div>
                <div class="system-content-wrap-desc">MySQL版本:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                        echo mysql_get_server_info();
                    ?>
                </div>
            </div>

            <div class="system-content-wrap">
                <div class="system-content-wrap-desc">&nbsp;&nbsp;程序版本:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.0</div>
                <div class="system-content-wrap-desc">上传文件:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;可以</div>
            </div>

        </div>

    </div>
</body>
</html>