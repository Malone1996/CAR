<?php
	
	include("../config.php");

	$outcome="DELETE FROM cars_info WHERE  车辆名 ='".$_GET['bo_ti']."' AND 汽车编号 = '".$_GET['nm']."'";
	mysql_query($outcome,$online);

	$sql="INSERT INTO cars_info (汽车编号,车辆名,汽车厂家,车辆颜色,出租价格,车辆库存量,已租数量)
	VALUES ('$_POST[汽车编号]','$_POST[车辆名]','$_POST[汽车厂家]','$_POST[车辆颜色]','$_POST[出租价格]','$_POST[车辆库存量]','$_POST[已租数量]')";

	mysql_query($sql,$online);

	echo '<script type="text/javascript"> alert("汽车信息修改成功"); window.location=\'manage.php'.'\''.'</script>';
?>