<?php
$connect=mysql_connect("localhost","root","masterkey") or die("cannot connect");
$db=mysql_select_db("test")or die("cannot connect database!");
mysql_db_query("test");
$Allow= "UPDATE visitor SET Status = 'Allow' ORDER BY id DESC LIMIT 1";
$Denied= "UPDATE visitor SET Status = 'Denied' ORDER BY id DESC LIMIT 1";

$data = file_get_contents("php://input");
$datajsonDecode = json_decode($data);
$var_status = $datajsonDecode->var_status;

$status = $var_status;

if($status == "Allow"){
	mysql_query($Allow);
	echo $results = '{"results":"Allow"}';
}

else if($status == "Denied"){
	mysql_query($Denied);
	echo $results = '{"results":"Denied"}';
}
else{
	echo $results = '{"results":"Error"}';
}
?>