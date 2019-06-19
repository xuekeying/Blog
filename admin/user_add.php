<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户增加</title>
    <link rel="stylesheet" href="./css/gongao_update.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="rigth">
        <div class="mask">
            <div class="mask-form">
                <p>用户增加</p>
                <div class="flex-container">
                    <!-- <div class="form-msg form-msg-one"><span>id</span><input type="text" name="id" value=""></div> -->
                    <div class="form-msg form-msg-two"><span>姓名</span><input type="text" name="username" id="" value=""></div>
                    <div class="form-msg form-msg-three"><span>密码</span><input type="text" name="password" value=""></div>
                    <div class="form-msg form-msg-four"><span>邮箱</span><input type="text" name="email" value=""></div>
                    <div class="form-msg form-msg-five"><span>性别</span><input type="text" name="sex" value=""></div>
                    <div class="form-msg form-msg-six"><span>类别</span><input type="text" name="type" value=""></div>
                    <div class="form-msg btn form-msg-seven">
                        <input class="query-ok" type="submit" name="submit" value="确认"/>
                        <input class="query-cancel" type="submit" name="cancel" value="取消"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/user_add_do.js"></script>
</body>
</html>