<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人设置界面</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/setting.css">
</head>
<body>
    <div class="right">
        <div class="title">操作</div>
        <!-- 分割线 -->
        <div class="line"></div>
        <div class="wrap-content-article">
            <p class="personl_setting">个人设置</p>
        </div>

        <div class="title">个人信息</div>
        <!-- 分割线 -->
        <div class="line"></div>
        <div class="content-personal">
            <div class="flex-container">
                <?php
                    session_start();
                    $author = $_SESSION['admininfo']['username'];
                    require "../link/db.php";
                    $sql = "select * from blog_user where name='$author'";
                    $result = mysql_query($sql,$conn);
                    while($res = mysql_fetch_array($result)){
                ?>
                    <div class="form-msg form-msg-one"><span>id</span><input type="text" name="userId"  disabled="disabled" readonly="true" id="" value="<?php echo $res['id'];?>"></div>
                    <div class="form-msg form-msg-two"><span>姓名</span><input type="text" name="username"  disabled="disabled" readonly="true"  id="" value="<?php echo $res['name'];?>"></div>
                    <div class="form-msg form-msg-three"><span>密码</span><input type="text" name="password"  disabled="disabled" readonly="true"  value="<?php echo $res['password'];?>"></div>
                    <div class="form-msg form-msg-four"><span>邮箱</span><input type="text" name="email" value="<?php echo $res['email'];?>"></div>
                    <div class="form-msg form-msg-five"><span>性别</span><input type="text" name="sex" value="<?php echo $res['sex'];?>"></div>
                    <div class="form-msg form-msg-six"><span>类别</span><input type="text" name="type" disabled="disabled" readonly="true" value="<?php echo $res['type'];?>"></div>
                <?php } mysql_close($conn);?>
                    <div class="form-msg btn form-msg-seven">
                        <input class="query-ok" type="submit" name="submit" value="提交">
                        <input class="query-reset" type="reset" name="reset" value="重置"/>
                    </div>
            </div>
        </div>
    </div>
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/setting_update.js"></script>
</body>
</html>