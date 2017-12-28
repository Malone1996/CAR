<?php
	
	include("../config.php");

	$mysql="DELETE FROM cars_info WHERE 汽车编号 = '". $_GET['id'] ."'AND 车辆名 ='". $_GET['车辆名'] . "'";

	mysql_query($mysql,$online);



	mysql_select_db("car", $online);

	$mysql="DELETE FROM borrow WHERE car_id = ".$_GET['id'];

	mysql_query($mysql,$online);



	mysql_close($online);

echo '<script type="text/javascript"> alert("删除成功"); window.location='.'\''.'manage.php'.'\''.'</script>';

?>