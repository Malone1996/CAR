<?php
	include("../config.php");


	$outcome= mysql_query("SELECT * FROM cars_info WHERE  车辆名 ='". $_GET['车辆名'] . "'",$online);

	while($sql = mysql_fetch_array($outcome))
	{
		if(($sql['汽车编号']==$_GET['id'])&&($sql['车辆名']==$_GET['车辆名']));
			break;
	}
?>
<html>
<head>
	<title>信息修改</title>
	<meta charset="utf-8">
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
	<form method="POST" action="into_again.php?bo_ti=<?php echo $sql['车辆名']; ?>&&nm=<?php echo $sql['汽车编号']; ?>">
		<tr>
			<td>汽车编号：</td>
			<td><input type="text" name="汽车编号"  value="<?php echo $sql['汽车编号'];  ?>"/></td>
		</tr>
		<tr>
			<td>车辆名：</td>
			<td><input type="text" name="车辆名"  value="<?php echo $sql['车辆名'];  ?>"/></td>
		</tr>
		<tr>
			<td>汽车厂家：</td>
			<td><input type="text" name="汽车厂家" value="<?php echo $sql['汽车厂家'];  ?>" /></td>
		</tr>
		<tr>
			<td>车辆颜色</td>
			<td><input type="text" name="车辆颜色" value="<?php echo $sql['车辆颜色'];  ?>" /></td>
		</tr>
		<tr>
			<td>出租价格：</td>
			<td><input type="text" name="出租价" value="<?php echo $sql['出租价'];  ?>"/></td>
		</tr>
		<tr>
			<td>剩余数量：</td>
			<td><input type="text" name="剩余数量" value="<?php echo $sql['剩余数量']; ?>"/></td>
		</tr>
		<tr>
			<td>租借汽车数量：</td>
			<td><input type="text" name="已租借数量" value="<?php echo $sql['已租借数量'];  mysql_close($online); ?>"/></td>
		</tr>
		<tr>
			<td><input type="submit" style="width:50px;" value="提交" /></td>
			<td><input type="reset" style="width:50px;" value="重置" /></td>
		</tr>
		<tr>
			<td class='ree' colspan="2"><a href="manage.php" >返回主管理界面</a></td>
		</tr>
	</form>
	</table>
</body>
</html>