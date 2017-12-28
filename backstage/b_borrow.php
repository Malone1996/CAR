<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta chatset="UTF-8" />
<style type="text/css">
td
{ 
	height: 25px;
}
.re
{ 
	font-size: 20px;
	margin: 10px 0px 0px 40px;
}
</style>
</head>
<body>
<?php
	include("../config.php");

	$outcome= mysql_query("SELECT * FROM borrow",$online);

	echo'<table align = "center" border = "1" width = "1260" style="text-align: center;">';
	echo "<caption><h1>用户租借信息</h1></caption>";
	
	echo "<tr>";
	echo "<td>租借账户</td>";
	echo "<td>租借时间</td>";
	echo "<td>汽车编号</td>";
	echo "<td>车辆名</td>";
	echo "<td>车牌号</td>";
	echo "<td>汽车厂家</td>";
	echo "<td>购买日期</td>";
	echo "<td>车辆颜色</td>";
	echo "<td>花费金额</td>";
	echo "<td>剩余数量</td>";
	echo "<td>总租借数量</td>";
	echo "<td>本次租借数量</td>";
	echo "</tr>";

	$var = 0;

	while($sql_w = mysql_fetch_array($outcome))
	{


		$between="SELECT * FROM cars_info WHERE 汽车编号='".$sql_w["car_id"]."' ";
		$outcome_t = mysql_query($between,$online);

		
		if(isset($sql_w['user']))
				$var++;

		while($sql = mysql_fetch_array($outcome_t))
		{
			echo "<tr>";
			echo "<td>".$sql_w['user']."</td>";	
			echo "<td>".$sql_w['time']."</td>";
			echo "<td>".$sql['汽车编号']."</td>";
			echo "<td>".$sql['车辆名']."</td>";
			echo "<td>".$sql['车牌号']."</td>";
			echo "<td>".$sql['汽车厂家']."</td>";
			echo "<td>".$sql['购买日期']."</td>";
			echo "<td>".$sql['车辆颜色']."</td>";
			echo "<td>".$sql['花费金额']."元</td>";
			echo "<td>".$sql['车辆库存量']."</td>";
			echo "<td>".$sql['已租数量']."</td>";
			echo "<td>1</td></tr>";
			
		}

	}
	if($var == 0)
		echo "<tr><td colspan='10'>没有汽车租借信息</td></tr>";
	echo "</table>";
	echo '<div class="re"><a href="manage.php">返回主管理界面</a></div>';
	mysql_close($online);
?>
</body>
</html>