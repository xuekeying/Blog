<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>中部</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div class="main">
        <div class="main-wrap">
            <div class="left">
                <?php
                    require "../link/db.php";
                    $sql = "select * from blog_class";
                    $result = mysql_query($sql,$conn);
                    while($res = mysql_fetch_array($result)){
                ?>
                <div class="nav"><?php echo $res['class']?></div>
                <?php }?>
            </div>
            <div class="middle">
                <!-- <div class="banner">
                    <div class="image"><img src="./img/banner2.png"></div>
                    <div class="image"><img src="./img/banner1.png"></div>
                    <div class="image"><img src="./img/banner3.png"></div>
                </div> -->
                <?php require "banner.php";?>
                <div class="content">

                    <?php
                        require "../link/db.php";
                        $sql = "select * from blog_article";
                        $result = mysql_query($sql,$conn);
                        while($res = mysql_fetch_array($result)){
                    ?>
                    <div class="content-wrap">
                        <div class="title"><?echo $res['title'];?></div>
                        <div class="con"><?echo $res['introduction'];?></div>
                        <div class="id"><?echo $res['id'];?></div>
                        <div class="info">
                            <span class="author"><?php echo $res['author']?></span>
                            <span class="type"><?php echo $res['article_type'];?></span>
                            <span class="date"><?php echo $res['date_created'];?></span>
                            <span class="like_num"><img src="./img/icon/like.png"><?php echo $res['like_number'];?></span>
                            <span class="com_num"><img src="./img/icon/comments.png"><?php echo $res['comment_number'];?></span>
                        </div>
                    </div>
                    <?php } mysql_close($conn);?>

                </div>
            </div>
            <div class="right">
                <div class="recommend">
                    <div class="p-title">
                        <span class="ic">| </span>今日推荐
                    </div>
                    <!-- 推荐个体开始 -->
                    <?php
                        require "../link/db.php";
                        $sql = "select * from blog_recommend";
                        $result = mysql_query($sql,$conn);
                        while($res = mysql_fetch_array($result)){
                    ?>
                    <div class="recommend-wrap">
                        <div class="recomment-wrap-content">
                            <div class="pic"><img src="<?php echo $res['url'];?>"></div>
                            <div class="desc"><?php echo $res['content'];?></div>
                        </div>
                    </div>
                    <?php }?>
                    <!-- 推荐个体结束 -->

                </div>
                <!-- 今日推荐结束 -->

                <!-- 日历开始 -->
                <div class="cal">
                    <?php require "calendar.php";?>
                </div>

            </div>
        </div>
    </div>

    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/read.js"></script>
</body>
</html>