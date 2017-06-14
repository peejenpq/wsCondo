<?php
mysql_connect("localhost","root","masterkey");
mysql_select_db("test");

$data = file_get_contents("php://input");
$dataJsonDecode = json_decode($data);

$var_user = $dataJsonDecode->var_user;
$var_pass = $dataJsonDecode->var_pass;

$user = "peerawat";
$pass = "masterkey";


$sql = "SELECT * FROM user WHERE user_login = '".mysql_real_escape_string($user)."' and user_pass = '".md5(mysql_real_escape_string($pass))."'";
$resource = mysql_query($sql);
$count_row = mysql_num_rows($resource);

if($count_row > 0) {
	while($result = mysql_fetch_assoc($resource)){
		$rows[]=$result;
	}

	$data = json_encode($rows);
	$totaldata = sizeof($rows);
	$results = '{"results":'.$data.'}';

}else{
	$results = '{"results":null}';
}

echo $results;
?>
