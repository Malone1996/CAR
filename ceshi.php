<?php
	header("Content-Type:text/html;charset=utf-8");
 	include("config.php");

	$zhongjian="SELECT * FROM cars_info WHERE 汽车编号=".$_GET['id'];

	$outcome= mysql_query($zhongjian,$online);

	echo "<table border=\"1\">";
	while($sql = mysql_fetch_array($outcome))
	{
		echo "<tr>";
		$ceshi = $sql['汽车编号'];
		echo "<td>".$sql['汽车编号']."</td>";
		echo "<td>".$sql['车辆名']."</td>";
		echo "<td>".$sql['汽车厂家']."</td>";
		echo "<td>".$sql['购买日期']."</td>";
		echo "<td>".$sql['车辆颜色']."</td>";
		echo "<td>".$sql['花费金额']."元</td>";
		echo "<td>".$sql['车辆库存量']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	mysql_close($online);
?>