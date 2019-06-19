<?php
    $dbHostName = "localhost";
    $dbUser = "root";
    $dbPassword = "sky06xky";
    $dbName = "blog";
    $conn = mysql_connect($dbHostName,$dbUser,$dbPassword) or die("数据库连接失败，请检查数据库的连接信息！");
    mysql_select_db($dbName,$conn);
    mysql_query("set names utf8");
?>