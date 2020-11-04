<?php 

include_once '../config/db.php';

$sql = "select * from tbl_comment where `uname` != 'system' ORDER BY `like` DESC";

// 执行查询
$exe_res = mysqli_query($link, $sql);
// 返回数据
$data = mysqli_fetch_all($exe_res,MYSQLI_ASSOC);

// echo json_encode($data);

 ?>




 <!DOCTYPE html>
 <html>
 <head>
 	<title>后台管理</title>

 	<style>
 		th,td{
 			border: 1px solid #ccc;
 			text-align: center;
 		}
 	</style>
 	<script src="../js/jquery-1.9.1.min.js" type="text/javascript"></script>
 </head>
 <body>
 
 <table style="width: 1000px; margin: 0 auto; border: 1px solid #ccc;">
 	<h1 style="text-align: center;">后台管理系统</h1>
 	<tr>
		<th>ID</th>
		<th>名称</th>
		<th>评论内容</th>
		<th>点赞数</th>
		<th>评论时间</th>
		<th>操作</th>
 	</tr>

 		<?php 

 			for($i=0;$i<count($data);$i++){
 				echo "<tr>";
 				echo "<td>".$data[$i]['id']."</td>";
 				echo "<td>".$data[$i]['uname']."</td>";
 				echo "<td>".$data[$i]['msg']."</td>";
 				echo "<td>".$data[$i]['like']."</td>";
 				echo "<td>".$data[$i]['create_time']."</td>";
 				echo "<td><a href='./DelCommentAction.php?id={$data[$i]['id']}'>删除</a></td>";
 				echo "</tr>";
 			}

 		 ?>
 	</tr>

 </table>


 <script>
 	
 	function del(id) {
 		
 	}
 </script>
 </body>
 </html>