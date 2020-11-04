<?php 
include_once '../config/db.php';

$title = isset($_POST['title']) ? $_POST['title'] : null;
$content = isset($_POST['content']) ? $_POST['content'] : null;
$sql = "insert into tbl_comment(uname,msg) values('{$title}','{$content}')";

if (mysqli_query($link,$sql)) {
	echo "success!";
}else{
	echo "fall";
}

 ?>
