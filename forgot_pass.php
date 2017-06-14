<?php
require_once('PHPMailer/class.phpmailer.php');
mysql_connect("localhost","root","masterkey");
mysql_select_db("test");

$data = file_get_contents("php://input");
$dataJsonDecode = json_decode($data);

$var_room = $dataJsonDecode->var_room;
$var_email = $dataJsonDecode->var_email;

$room = "3";
$email = "peejen_pq@hotmail.com";


$strSQL = "SELECT * FROM user WHERE user_id = '".mysql_real_escape_string($room)."' and email = '".mysql_real_escape_string($email)."'";
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
			$strSubject = "New Password From Condo";
			$strHeader = "From: Condo Somewhere";
			$strMessage = "New Password : 12345";
			$flgSend = mail($email,$strSubject,$strMessage,$strHeader);
			if($flgSend)
			{
				echo "Mail sending.";
			}
			else
			{
				echo "Mail cannot send.";
			}
		}
		else
		{
			$results = '{"results":"Error"}';
		}
	}	
echo $results;

mysql_close();
?>