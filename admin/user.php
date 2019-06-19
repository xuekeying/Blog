<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>分类页面</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="right">
        <div class="title">操作</div>
        <!-- 分割线 -->
        <div class="line"></div>
        <div class="wrap-content-article">
            <p class="user_add">增加用户</p>
        </div>

        <div class="title">用户管理</div>
        <!-- 分割线 -->
        <div class="line"></div>
        <!-- 内容区域 -->
        <table>
            <tr>
                <td class="first_col">序号</td>
                <td class="second_col">用户名</td>
                <td class="third_col">密码</td>
                <td class="fourth_col">邮箱</td>
                <td class="seventh_col">性别</td>
                <td class="fiveth_col">类别</td>
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
                    $sql = "select * from blog_user";
                    $result = mysql_query($sql,$conn);
                    while($res = mysql_fetch_array($result)){
            ?>
            <tr>
                <td class="first_col"><?php echo $res['id'];?></td>
                <td class="second_col"><?php echo $res['name'];?></td>
                <td class="third_col"><?php echo $res['password'];?></td>
                <td class="fourth_col"><?php echo $res['email'];?></td>
                <td class="seventh_col"><?php echo $res['sex'];?></td>
                <td class="fiveth_col"><?php echo $res['type'];?></td>
                <td class="sixth_col">
                    <a style="text-decoration: none;cursor: pointer;" class="user_update">修改</a> | 
                    <a style="text-decoration: none;cursor: pointer;" class="user_delete">删除</a>
                </td>
            </tr>
            <?php } mysql_close($conn);}?>
        </table>
    
        </div>
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/user.js"></script>
    <script src="./js/user_update.js"></script>
    <script src="./js/user_add.js"></script>
</body>
</html>