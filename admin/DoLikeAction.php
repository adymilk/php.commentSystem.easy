<?php 

include_once '../config/db.php';

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$sql = 'UPDATE tbl_comment
        SET `like`=`like`+1
        WHERE id='.$id;

if (mysqli_query($link,$sql)) {
	echo "点赞成功！";
}else{
	echo "点赞失败！".$sql;
}
 ?>