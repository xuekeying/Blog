<?php
  $title = $_POST['title'];
  $introduction = $_POST['introduction'];
  $content = $_POST['content'];
  $article_type=$_POST['article_type'];
  $date_created = date("Y-m-d H:i:s");
  $date_modified = date("Y-m-d H:i:s");
  $articleType = $_POST['articleType'];
  session_start();
  $author = $_SESSION['userinfo']['username'];
  if(isset($_POST['submit'])){
    require "../link/db.php";
    $sql = "insert into blog_article (id,title,introduction,content,author,date_created,date_modified,article_type)" +
            "values(null,'$title','$introduction','$content','$author','$date_created','$date_modified','$articleType')";
    $result = mysql_query($sql,$conn);
    if($result){
        echo "<script>alert('增加成功');</script>";
        header('location:main.php');
    }
    else{
        echo "<script>alert('增加失败');</script>";
    }
  }
?>