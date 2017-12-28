<?php
	header("Content-Type:text/html;charset=utf-8");
	session_start();
	$name = $classname = $account = "";
	$a=0;
	if (isset($_SESSION['nickname']))
	{
		$a = 1;
		if ($_SESSION['class'])
		{
			$classname = "系统管理员";
			$a = 2;
		}
		else
			$classname = "普通用户";
		$name = $_SESSION['nickname'];
		$account = $_SESSION['account'];
	}
?>
<html>
<head>
	<title>汽车租借系统</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="backstage/CSS.css">
<script type="text/javascript">
function land()
{ 
	if (<?php echo $a; ?>==0) 
	{ 
		alert("请先登录");
		window.location='land.php';
	}
}
function check()
{ 
	if (<?php echo $a; ?>==2) 
		window.location='backstage/manage.php';
	else
	{ 
		alert("对不起，你不是系统管理员！有需要可以在右侧留言");
	}
	
}
</script>
</head>
<body onload="land()" >
<table align = "center" border = "1" width = "960" style="text-align: center;">
	<tr>
		<td><a href="#" onclick="check()">汽车管理</a></td>
		<td>用户昵称：<a href="user.php"><?php echo $name; ?></a></td>
		<td>级别：<?php echo $classname; ?></td>
		<td><a href="message.php">用户留言</a></td>
		<td><a href="logout.php">注销</a></td>
	</tr>
</table>
<?php
	
	include "backstage/page.cless.php";
	include("config.php");

	$outcome= mysql_query("SELECT * FROM cars_info",$online);


	$total = mysql_num_rows($outcome);
	$汽车编号 = 10;
	$page = new Page($total,$汽车编号,"");
	$sql = "select * from cars_info {$page->limit}";
	$outcome = mysql_query($sql,$online);

	echo'<table align = "center" border = "1" width = "1080" style="text-align: center;">';
	echo "<caption><h1>汽车租借</h1></caption>";
	echo "<tr>";
	echo "<td>"."车辆名"."</td>";
	echo "<td>"."汽车类型"."</td>";
	echo "<td>"."汽车厂家"."</td>";
	echo "<td>"."购买日期"."</td>";
	echo "<td>"."车辆颜色"."</td>";
	echo "<td>"."采购价格"."</td>";
	echo "<td>"."出租价格"."</td>";
	echo "<td>"."库存辆"."</td>";
	echo "<td>"."保险公司"."</td>";
	echo "<td>"."保险截止"."</td>";
	echo "<td>"."维修时间"."</td>";
	echo "<td>"."操作"."</td>";
	echo "</tr>";
	
	while($sql = mysql_fetch_array($outcome))
	{
		echo "<tr>";
		$id = $sql['汽车编号'];
		echo "<td>".$sql['车辆名']."</td>";
		echo "<td>".$sql['汽车类型']."</td>";
		echo "<td>".$sql['汽车厂家']."</td>";
		echo "<td>".$sql['购买日期']."</td>";
		echo "<td>".$sql['车辆颜色']."</td>";
		echo "<td>".$sql['采购价格']."元</td>";
		echo "<td>".$sql['出租价']."元</td>";
		echo "<td>".$sql['车辆库存量']."</td>";
		echo "<td>".$sql['保险公司']."</td>";
		echo "<td>".$sql['保险截止日期']."</td>";
		echo "<td>".$sql['维修时间']."</td>";
		$zj="SELECT * FROM borrow WHERE car_id='".$id."'";
		$zjsz=mysql_query($zj,$online);
		$var=0;
		while($arr = mysql_fetch_array($zjsz))
		{ 
			if(($arr["car_id"]==$id)&&($arr["user"]==$account))
			{
				echo "<td class='color'>"."<a class=\"remand\" href="."\""."remand.php?id=".$id."&& 车辆名=".$sql['车辆名']."\"".">&nbsp;还车&nbsp;</a></td>";
				$var++;
				break;
			}
		}
		if(($var==0)&&($sql['车辆库存量']==0))
			echo "<td>汽车已借完</td>";
		else
			if($var==0)
			echo "<td>"."<a class=\"borrow\" href="."\""."borrow.php?id=".$id."&& 车辆名=".$sql['车辆名']."\"".">&nbsp;租车&nbsp;</a></td>";
	
		echo "</tr>";
	}
	echo "<tr><td style='text-align:center;' colspan = \"9\" align = \"right\">".$page->/*fpage(array(0,1,2,3,4,5,6,7,8))*/fpage(array(3,4,5,8,6,7,2,0,))."</td></tr>";
	echo "</table>";
	mysql_close($online);

?>
</body>
</html>