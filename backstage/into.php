<?php
	$fp = fopen("book_num.txt","r");
	$num = fgets($fp,10);
	$num++;
	fclose($fp);
	$fp = fopen("book_num.txt","w");
	fputs($fp,$num);
	fclose($fp);

	include("../config.php");

	$sql="INSERT INTO cars_info (车辆名,汽车类型,车辆颜色,车牌号,车辆库存量,花费金额,采购价格,出租价,购买日期,汽车厂家,保险公司,保险截止日期,维修时间,电话,汽车编号)
	VALUES ('$_POST[车辆名]','$_POST[汽车类型]','$_POST[车辆颜色]','$_POST[车牌号]','$_POST[车辆库存量]','$_POST[花费金额]','$_POST[采购价格]','$_POST[出租价]','$_POST[购买日期]','$_POST[汽车厂家]','$_POST[保险公司]','$_POST[保险截止日期]','$_POST[维修时间]','$_POST[电话]','$汽车编号')";

	mysql_query($sql,$online);

	echo '<script type="text/javascript"> alert("汽车添加成功"); window.location='.'\''.'manage.php'.'\''.'</script>';
?>