<?php
	$data = file_get_contents("php://input");
	$dataJsonDecode = json_decode($data);
	$var_ver = $dataJsonDecode->var_ver;
	$var_brand = $dataJsonDecode->var_brand;
	$var_regis = $dataJsonDecode->var_regis;
	$var_color = $dataJsonDecode->var_color;
	$var_phone = $dataJsonDecode->var_phone;

	$var_ver = $var_ver;
	$var_brand = $var_brand;
	$var_regis = $var_regis;
	$var_color = $var_color;
	$var_phone = $var_phone;

	mysql_connect("localhost","root","");
	mysql_select_db("db_smart");
	mysql_query("INSERT INTO your_cars( `ver`, `brand`, `regis`, `color`, `phone`)VALUES('".$var_ver."' , '".$var_brand."' , '".$var_regis."' , '".$var_color."' , '".$var_phone."' )");
?>