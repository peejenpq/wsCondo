<?php
$hostname="localhost";
$user="root";
$password="masterkey";
$dbname="test";//ชื่อฐานข้อมูล
$connect=mysql_connect($hostname,$user,$password) or die("cannot connect");
$db=mysql_select_db($dbname)or die("cannot connect database!");
$sql= "SELECT * FROM visitor ORDER BY id DESC LIMIT 1";//เรียกข้อมูล
$dbquery=mysql_db_query($dbname,$sql);
$row=mysql_num_rows($dbquery);
while($result=mysql_fetch_array($dbquery)) {
$a[] = $result[Status]; //เก็บช้อความ 10 อันดับล่าสุดลงตัวแปร
}

for($i=count($a)-1;$i>=0;$i--) {
if($a[$i] == "Wait"){
   	echo $results = '{"results":"Wait"}';
}
else if($a[$i] == "Denied"){
   	echo $results = '{"results":"Denied"}';
}
else if($a[$i] == "Allow"){
   	echo $results = '{"results":"Allow"}';
}
}
?>