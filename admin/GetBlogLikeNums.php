<?php 

include_once '../config/db.php';

$sql = "select * from tbl_comment where `uname` = 'system'";

// 执行查询
$exe_res = mysqli_query($link, $sql);
// 返回数据
$data = mysqli_fetch_all($exe_res,MYSQLI_ASSOC);

echo json_encode($data);

 ?>