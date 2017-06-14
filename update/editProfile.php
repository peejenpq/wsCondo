<?php
	$data = file_get_contents("php://input");
	$dataJsonDecode = json_decode($data);

	$var_user = $dataJsonDecode->var_user;
	$var_fname = $dataJsonDecode->var_fname;
	$var_email = $dataJsonDecode->var_email;
	$var_phone = $dataJsonDecode->var_phone;
	$var_gender = $dataJsonDecode->var_gender;
	$var_birth = $dataJsonDecode->var_birth;
	$var_cname = $dataJsonDecode->var_cname;
	$var_caddress = $dataJsonDecode->var_caddress;
	$var_cemail = $dataJsonDecode->var_cemail;
	$var_ctell = $dataJsonDecode->var_ctell;
	$var_cfax = $dataJsonDecode->var_cfax;
	$var_cposition = $dataJsonDecode->var_cposition;

	
	$user = $var_user;
	$fname = $var_fname;
	$email = $var_email;
	$phone = $var_phone;
	$gender = $var_gender;
	$birth = $var_birth;
	$cname = $var_cname;
	$caddress = $var_caddress;
	$cemail = $var_cemail;
	$ctell = $var_ctell;
	$cfax = $var_cfax;
	$cposition = $var_cposition;

	mysql_connect("localhost","root","");
	mysql_select_db("db_smart");
	mysql_query("UPDATE user
				 SET fullname = `fname` ,email = `email` ,phone = `phone` ,gender = `gender` , birthdate = `birth` , company_name = `cname` , company_address = `caddress` , company_email = `cemail` , company_tel = `ctell` , company_fax = `cfax` , company_position = `cposition` , 
				 WHERE user_login = `user`;");
?>