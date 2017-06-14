<?php
	$data = file_get_contents("php://input");
	$dataJsonDecode = json_decode($data);
	$var_fname = $dataJsonDecode->var_fname;
	$var_lname = $dataJsonDecode->var_lname;
	$var_room = $dataJsonDecode->var_room;
	$var_phone = $dataJsonDecode->var_phone;

	$fname = $var_fname;
	$lname = $var_lname;
	$room = $var_room;
	$phone = $var_phone;

	mysql_connect("localhost","root","");
	mysql_select_db("db_smart");
	mysql_query("INSERT INTO your_detail(`fname`, `lname`, `room`, `phone`);
?>