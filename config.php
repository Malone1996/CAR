<?php
	error_reporting(1);
	$online = mysql_connect("localhost","root","");

	mysql_select_db("car",$online);

	mysql_query("set names utf8");

?>