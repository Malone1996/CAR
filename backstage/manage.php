
<html>
<head>
	<title>汽车租借后台管理</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="CSS.css">
<style type="text/css">
td
{ 
	 height:25px;
}
</style>
</head>
<body>
<table align = "center" border = "1" width = "960" style="text-align: center;">
	<tr>
		<td colspan="4">欢迎你，管理员</td>
	</tr>
	<tr>
		<td width = "320" ><a href="addbook.php">汽车添加</a></td>
		<td width = "320" ><a href="examine_mes.php">查看用户留言</a></td>
		<td width = "320" ><a href="b_borrow.php">查看汽车租借信息</a></td>
	</tr>
</table>
<?php
	include "page.cless.php";
	include("../config.php");
	$outcome= mysql_query("SELECT * FROM cars_info",$online);
	$total = mysql_num_rows($outcome);
	$汽车编号 = 10;
	$page = new Page($total,$汽车编号,"");
	$sql = "select * from cars_info {$page->limit}";
	$outcome = mysql_query($sql);
	echo '<table align = "center" border = "1" width = "960"  style="text-align: center;">';
	$between="SELECT * FROM borrow WHERE user='".$_SESSION['account']."'";
	echo "<caption><h1>汽车租借管理</h1></caption>";
	echo "<tr>";
	echo "<td>"."汽车编号"."</td>";
	echo "<td>"."车辆名"."</td>";
	echo "<td>"."汽车厂家"."</td>";
	echo "<td>"."车辆颜色"."</td>";
	echo "<td>"."出租价格"."</td>";
	echo "<td>"."剩余数量"."</td>";
	echo "<td>"."已租借数量"."</td>";
	echo "<td>"."状态"."</td>";
	echo "</tr>";
	while($sql = mysql_fetch_array($outcome))
	{
		
		echo "<tr>";
		$id = $sql['汽车编号'];
		echo "<td>".$sql['汽车编号']."</td>";
		echo "<td>".$sql['车辆名']."</td>";
		echo "<td>".$sql['汽车厂家']."</td>";
		echo "<td>".$sql['车辆颜色']."</td>";
		echo "<td>".$sql['出租价']."元</td>";
		echo "<td>".$sql['车辆库存量']."</td>";
		echo "<td>".$sql['已租数量']."</td>";
		echo "<td>"."<a href="."\""."delete_zj.php?id=".$id."& 车辆名=".$sql['车辆名']."\"".">&nbsp;&nbsp;删除&nbsp;|&nbsp;</a>";
		echo "<a href="."\""."revise.php?id=".$id."& 车辆名=".$sql['车辆名']."\"".">修改&nbsp;&nbsp;</a></td>";
		echo "</tr>";
	
	}
	echo "<tr><td colspan = \"9\" align = \"center\">".$page->fpage(array(3,4,5,8,6,7,2,0,))."</td></tr>";
	echo "<tr><td colspan = \"9\" align = \"center\"><a href=\"../index.php\">返回汽车租借界面</a></td></tr>";
	echo "</table>";
	mysql_close($online);
	
?>
</body>
</html>
