<?php
	$data = file_get_contents("php://input");
	$dataJsonDecode = json_decode($data);
	$var_name = $dataJsonDecode->var_name;
	$var_detail = $dataJsonDecode->var_detail;
	$var_pic = $dataJsonDecode->var_pic;

	$var_name = $var_name;
	$var_detail = $var_detail;
	$var_pic = $var_pic;

	mysql_connect("localhost","root","");
	mysql_select_db("db_smart");
	mysql_query("INSERT INTO repair( `name`, `detail`, `pic`)VALUES('".$var_name."' , '".$var_detail."' , '".$var_pic."')");
?>