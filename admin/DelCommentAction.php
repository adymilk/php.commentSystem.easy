<?php 
include_once '../config/db.php';


$id = isset($_GET['id']) ? $_GET['id'] : 0;

$sql = "DELETE FROM tbl_comment WHERE id={$id}";

if (mysqli_query($link,$sql)) {
	header("refresh:2;url=./index.php");
	echo "删除成功! 2秒后自动跳转到<a href='./index.php'> 后台首页</a>";
}else{
	echo "fall";
}

 ?>