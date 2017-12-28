<!DOCTYPE html>
<html>
<head>
	<title>用户信息查看</title>
	<meta charset="UTF-8" />
<style type="text/css">
.kq
{ 
	margin: 0px 0px 0px 190px;
}
</style>
</head>
<body>
<?php

	include("config.php");

	session_start();

	$between="SELECT * FROM board WHERE user='".$_SESSION['account']."'";

	$outcome = mysql_query($between,$online);

	echo "<table border='1' align = \"center\"  width = \"960\" style=\"text-align: center;\"><caption><h1>我的留言板</h1></caption><tr><th>时间</th><th>留言内容</th></tr>";

	$var = 0;

	while($sql = mysql_fetch_array($outcome))
	{
		echo "<tr><td>".$sql['time']."</td><td align='left'>&nbsp;&nbsp;&nbsp;".$sql['message']."</td></tr>";
		if(isset($sql['time']))
			$var++;
	}
	if($var == 0)
		echo "<tr><td colspan='2' align='center'>没有留言信息</td></tr>";
	echo "</table>";



	$between="SELECT * FROM borrow WHERE user='".$_SESSION['account']."'";

	$outcome = mysql_query($between,$online);
	echo'<table align = "center" border = "1" width = "960" style="text-align: center;">';
	echo "<caption><h1>我租的车</h1></caption>";

	echo "<tr>";
	echo "<td>租车时间</td>";
	echo "<td>车名</td>";
	echo "<td>汽车厂家</td>";
	echo "<td>车辆颜色</td>";
	echo "<td>价格</td>";
	echo "<td>电话</td>";
	echo "</tr>";

	$var = 0;

	while($sql_w = mysql_fetch_array($outcome))
	{


		$between="SELECT * FROM cars_info WHERE 汽车编号='".$sql_w["car_id"]."' ";
		$outcome_t = mysql_query($between,$online);

		while($sql = mysql_fetch_array($outcome_t))
		{
			echo "<tr>";
			echo "<td>".$sql_w['time']."</td>";
			echo "<td>".$sql['车辆名']."</td>";
			echo "<td>".$sql['汽车厂家']."</td>";
			echo "<td>".$sql['车辆颜色']."</td>";
			echo "<td>".$sql['出租价']."元</td>";
			echo "<td>".$sql['电话']."</td>";
			if(isset($sql['租借者'])&&isset($sql_w['time']))
			$var++;
		}
		
	}

	if($var == 0)
		echo "<tr><td colspan='5'>暂无租借汽车</td></tr>";

	echo "</table>";

	echo "<div class='kq'><br />"."<a href=\"index.php\">返回主页</a></div>";
	mysql_close($online);
?>
</body>
</html>