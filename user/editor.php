<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文章编辑界面</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/editor.css">
</head>
<body>
    <div class="right-editor">
        <p>撰写文章</p>
        <form action="article_add_do.php" method="POST" class="editor-wrap">
            <span>标题</span><input type="text" name="title"><br/><br/>

            <span class="intro">简介</span>
            <textarea name="introduction" id="" cols="70" rows="3"></textarea>
            <br/><br/>
            <div class="conta">
                <script id="container" name="content" type="text/plain"></script><br/><br/>
            </div>

            <div class="a_type">
                <span>文章类型</span>
                <select name="articleType">
                    <option value="热门">热门</option>
                    <option value="Python">Python</option>
                    <option value="linux">linux</option>
                </select>
            </div>

            <input type="button" name="cancel" value="取消" id="cancel">
            <input type="submit" name="submit" value="提交">
        </form>
    </div>
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/editor.js"></script>

    <!-- 配置文件 -->
    <script type="text/javascript" src="/code/static/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/code/static/ueditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container',{
            toolbars: [
                [
                    'fullscreen', // 全屏
                    'source', // 源代码
                    'undo',  // 撤销
                    'redo',  // 重做
                    'bold',  // 加粗
                    'fontsize', // 字体大小
                    'simpleupload',  // 单张图片上传
                    'indent',  // 首行缩进
                    'inserttable', // 插入表格
                    'insertcode', // 程序语言
                    'time', // 时间
                    'justifyleft', //居左对齐
                    'justifyright', //居右对齐
                    'justifycenter', //居中对齐
                    'justifyjustify', //两端对齐
                ]
            ],
            autoHeightEnabled: false,  //编辑器内容，是否自动长高,默认true
            autoFloatEnabled: false,
            elementPathEnabled : false  // 是否启用元素路径，默认是true显示
        });
    </script>
</body>
</html>