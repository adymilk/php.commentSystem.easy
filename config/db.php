<?php 
header('Content-type:text/html;charset=utf-8');


//数据库初始化


//连接认证
$link = mysqli_connect('localhost:3306','root','52b228hq') or die('数据库连接失败！');

//设定字符集
mysqli_query($link,'set names utf8');

//选择数据库
mysqli_query($link,'use blog');

 ?>