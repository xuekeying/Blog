<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>评论修改</title>
    <link rel="stylesheet" href="./css/gongao_update.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="rigth">
        <div class="mask">
            <div class="mask-form">
                <p>评论修改</p>
                <div class="flex-container">
                    <div class="form-msg form-msg-one"><span>id</span><input type="text" name="id" value="<?php echo $_GET['id'];?>"></div>
                    <div class="form-msg form-msg-two"><span>内容</span>
                        <input type="text" name="content" id="" value="<?php echo $_GET['commentContent'];?>">
                    </div>
                    <div class="form-msg form-msg-three"><span>作者</span><input type="text" name="author" value="<?php echo $_GET['author'];?>"></div>
                    <div class="form-msg form-msg-four"><span>文章id</span><input type="text" name="aticleId" value="<?php echo $_GET['articleId'];?>"></div>
                    <div class="form-msg btn form-msg-five">
                        <input class="query-ok" type="submit" name="submit" value="确认"/>
                        <input class="query-cancel" type="submit" name="cancel" value="取消">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/pinglun_update_do.js"></script>
</body>
</html>
