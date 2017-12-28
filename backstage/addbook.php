<?php
	date_default_timezone_set("Asia/Shanghai");
	$time = date("Y-m-d") . " " . date("h:i:sa");
?>
<html>
<head>
	<meta charset="UTF-8" />
<style type="text/css">
.add_top
{ 
	margin-top: 100px;
}
td
{ 
	width: 90px;
	height: 30px;
	font-size: 18px;
}
body
{ 
	
}
input
{
	width: 200px;
}
</style>
</head>
<body>
	<table align="center" class="add_top">
	<form method="POST" action="into.php">
		<tr>
			<td>汽车编号：</td>
			<td><input type="text" name="汽车编号" /></td>
		</tr>
		<tr>
			<td>花费金额：</td>
			<td><input type="text" name="花费金额" /></td>
		</tr>
		<tr>
			<td>汽车类型：</td>
			<td><input type="text" name="汽车类型" /></td>
		</tr>
		<tr>
			<td>车辆名：</td>
			<td><input type="text" name="车辆名" /></td>
		</tr>
		<tr>
			<td>车辆库存量：</td>
			<td><input type="text" name="车辆库存量"/></td>
		</tr>
		<tr>
			<td>采购价格：</td>
			<td><input type="text" name="采购价格" /></td>
		</tr>
		<tr>
			<td>车牌号：</td>
			<td><input type="text" name="车牌号" /></td>
		</tr>
		<tr>
			<td>出租价：</td>
			<td><input type="text" name="出租价" /></td>
		</tr>
		<tr>
			<td>购买日期：</td>
			<td><input type="text" name="购买日期" value="<?php echo $time;  ?>" /></td>
		</tr>
		<tr>
			<td>车辆颜色：</td>
			<td><input type="text" name="车辆颜色"/></td>
		</tr>
		<tr>
			<td>汽车厂家：</td>
			<td><input type="text" name="汽车厂家" /></td>
		</tr>
		<tr>
			<td>保险公司：</td>
			<td><input type="text" name="保险公司" /></td>
		</tr>
		<tr>
			<td>保险截止日期：</td>
			<td><input type="text" name="保险截止日期" value="<?php echo $time;  ?>" /></td>
		</tr>
		<tr>
			<td>维修时间：</td>
			<td><input type="text" name="维修时间" value="<?php echo $time;  ?>" /></td>
		</tr>
		
		<tr>
			<td>电话：</td>
			<td><input type="text" name="电话"/></td>
		</tr>
		<tr>
			<td><input style="width:50px;" type="submit" value="提交" /></td>
			<td><input style="width:50px;" type="reset" value="重置" /></td>
		</tr>
		<tr>
			<td class='ree' colspan="2"><a href="manage.php" >返回主管理界面</a></td>
		</tr>
	</form>
	</table>
</body>
</html>