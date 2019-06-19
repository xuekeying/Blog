<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文章阅读页面</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/articlRead.css">
</head>
<body>
    <div class="right">
        <p>文章预览</p>
        <span class="backBtn">返回</span>
        <div class="line"></div>
        <div class="article-title">
            <?php
                $id = (int)$_POST['id'];
                require "../link/db.php";
                $sql = "select * from blog_article where id=$id";
                $result = mysql_query($sql,$conn);
                while($res = mysql_fetch_array($result)){
            ?>
            <span>题目:<?php echo $res['title'];?></span>
        </div>
        <div class="article-introduction">
            <span>简介:<?php echo $res['introduction'];?></span>
        </div>
        <div class="article-msg">
            <div class="article-author">作者:<?php echo $res['author'];?></div>
            <div class="article-type">类别:<?php echo $res['article_type'];?></div>
        </div>
        <div class="line"></div>
        <div class="article-content">
            <div class="article-content-wrap">
                <?php echo $res['content'];?>
            </div>
        </div>
        <?php } mysql_close($conn);?>
    </div>
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/article_read_back.js"></script>
</body>
</html>