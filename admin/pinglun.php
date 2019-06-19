<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>评论页面</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="right">
        <div class="title">操作</div>
        <!-- 分割线 -->
        <div class="line"></div>
        <div class="wrap-content-article">
            <p class="pinglun_add">增加评论</p>
        </div>

        <div class="title">评论管理</div>
        <!-- 分割线 -->
        <div class="line"></div>
        <!-- 内容区域 -->
        <table>
            <tr>
                <td class="first_col">序号</td>
                <td class="second_col">内容</td>
                <td class="third_col">作者</td>
                <td class="fourth_col">文章id</td>
                <td class="sixth_col">操作</td>
            </tr>
            <?php
                session_start();
                if(empty($_SESSION['admininfo']) || empty($_SESSION['admininfo']['username'])){
                    //未登录，引导登录
                    header("location:login.php");
                }
                else{
                    $username = $_SESSION['admininfo']['username'];
                    require "../link/db.php";
                    $sql = "select * from blog_comment";
                    $result = mysql_query($sql,$conn);
                    while($res = mysql_fetch_array($result)){
            ?>
            <tr>
                <td class="first_col"><?php echo $res['id'];?></td>
                <td class="second_col"><?php echo $res['comment_content'];?></td>
                <td class="third_col"><?php echo $res['author'];?></td>
                <td class="fourth_col"><?php echo $res['article_id'];?></td>
                <td class="seventh_col">
                    <a style="text-decoration: none;cursor: pointer;" class="pinglun_update">修改</a> | 
                    <a style="text-decoration: none;cursor: pointer;" class="pinglun_delete">删除</a>
                </td>
            </tr>
            <?php } mysql_close($conn);}?>
        </table>

    </div>
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/pinglun.js"></script>
    <script src="./js/pinglun_update.js"></script>
    <script src="./js/pinglun_add.js"></script>
</body>
</html>