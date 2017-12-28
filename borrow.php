<?php
	header("Content-Type:text/html;charset=utf-8");

	date_default_timezone_set("Asia/shanghai");
	$time = date("Y-m-d") . " " . date("h:i:sa");

	include("config.php");

	$sel="SELECT * FROM cars_info WHERE 汽车编号=".$_GET['id'];

	$outcome= mysql_query($sel,$online);
	while($sql = mysql_fetch_array($outcome))
	{
		if ($sql['汽车编号'] == $_GET['id']) 
		{
			if ($sql['车辆库存量'] >= 1) 
			{
				$sql['已租数量'] = $sql['已租数量']+1;
				$车辆库存量 = $sql['车辆库存量']-1;

				$between_1="UPDATE cars_info SET 已租数量 = '". $sql['已租数量'] ."' WHERE 汽车编号 = '". $_GET['id'] ."'AND 车辆名 ='". $_GET['车辆名'] . "'";
				mysql_query($between_1,$online);
				echo mysql_error();

				$between_2="UPDATE cars_info SET 车辆库存量 = '". $车辆库存量 ."' WHERE 汽车编号 = '". $_GET['id'] ."'AND 车辆名 ='". $_GET['车辆名'] . "'";
				mysql_query($between_2,$online);
				echo mysql_error();
				
				session_start();
				$ins="INSERT INTO borrow (user,car_id,time)
				VALUES ('$_SESSION[account]','$_GET[id]','$time')";
				mysql_query($ins,$online);
			}
			else
			{ 
				echo '<script type="text/javascript"> alert("该汽车已借完"); window.location='.'\''.'index.php'.'\''.' </script>';
				exit();
			}
		}
	}
	mysql_close($online);
	echo '<script type="text/javascript"> alert("汽车租赁成功"); window.location='.'\''.'index.php'.'\''.'</script>';
	exit();
?>
