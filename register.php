<?php
mysql_connect("localhost","root","masterkey");
mysql_select_db("test");

$data = file_get_contents("php://input");
$dataJsonDecode = json_decode($data);
$var_user = $dataJsonDecode->var_user;
$var_pass = $dataJsonDecode->var_pass;

$user = $var_user;
$pass = $var_pass;

$insert = "INSERT INTO user(`group_id`,`user_login`, `user_pass`)VALUES('3','".$user."' , '".md5(mysql_real_escape_string($pass))."');";
$sql = "SELECT * FROM user WHERE user_login = '$user'";
$resource = mysql_query($sql);
$count = mysql_num_rows($resource);

if($count > 0) {
	while ($result = mysql_fetch_assoc($resource)) {
		$rows[] = $result;
	}
	$results = '{"results":"already"}';
}
else if($count == 0){
	mysql_query($insert);
	$results = '{"results":"successfully"}';
}
else {
	$results = '{"results":"error"}';
}
echo $results;
?>