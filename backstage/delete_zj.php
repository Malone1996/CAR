<html>
<head>
<script type="text/javascript">
function delete_yn()
{
var r=confirm("确认删除有关该汽车的所有记录?删除后无法恢复！");
if (r==true)
  	<?php echo "window.location='delete.php?id=".$_GET["id"]."&车辆名=".$_GET["车辆名"]."';"; ?>
else
  window.location='manage.php';
}
</script>
</head>
<body onload="delete_yn()">
</body>
</html>
