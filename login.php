<?php
mysql_connect("localhost","root","masterkey");
mysql_select_db("test");

$data = file_get_contents("php://input");
$dataJsonDecode = json_decode($data);

$var_user = $dataJsonDecode->var_user;
$var_pass = $dataJsonDecode->var_pass;

$user = $var_user;
$pass = $var_pass;

$strSQL = "SELECT * FROM user WHERE user_login = '".mysql_real_escape_string($user)."' and user_pass = '".md5(mysql_real_escape_string($pass))."'"; //MD5 Decode
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);

	$resource = mysql_query($strSQL);
	$count_row = mysql_num_rows($resource);

	if(!$objResult)
	{
			$results = '{"results":"not match"}';
	}
	else
	{
		if($count_row > 0)
		{
			while($result = mysql_fetch_assoc($resource)){
				$rows[] = $result;
			}
			$data = json_encode($rows);
			$totaldata = sizeof($rows);
			$results = '{"results":'.$data.'}';
		}
		else
		{
			$results = '{"results":"Error"}';
		}
	}	
echo $results;

mysql_close();
?>