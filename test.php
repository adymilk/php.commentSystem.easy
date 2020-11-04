<?php 
include_once './config/db.php';


$sql = "insert into tbl_comment(uname,msg) values('测试名称','评论内容')";

if (mysqli_query($link,$sql)) {
	echo "success!";
}else{
	echo "fall";
}

 ?>
