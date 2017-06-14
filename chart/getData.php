<?php
mysql_connect("localhost","root","");
mysql_select_db("db_smart");

$room = "103";

$sql = "SELECT price,salary FROM Bill WHERE Room = '".mysql_real_escape_string($room)."'";
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

mysql_close();
?>