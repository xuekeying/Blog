<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>搜索结果页面</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/searchContent.css">
</head>
<body>
    <p>搜索结果展示页面</p>
    <span class="backBtn">返回</span>
    <div class="line"></div>

    <div class="content">

        <?php
            $author = $_GET['authorContent'];
            require "../link/db.php";
            $sql = "select * from blog_article where author='$author'";
            $result = mysql_query($sql,$conn);
            while($res = mysql_fetch_array($result)){
        ?>
        <div class="content-wrap">
            <div class="title"><?php echo $res['title'];?></div>
            <div class="con"><?php echo $res['introduction'];?></div>
            <div class="id"><?php echo $res['id'];?></div>
            <div class="info">
                <span class="author"><?php echo $res['author'];?></span>
                <span class="type"><?php echo $res['type'];?></span>
                <span class="date"><?php echo $res['date_created'];?></span>
            </div>
        </div>
        <?php } mysql_close($conn);?>
    </div>
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/search_read.js"></script>
</body>
</html>