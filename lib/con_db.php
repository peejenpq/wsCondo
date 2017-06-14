<?php
$Setup_Server = 'localhost';
$Setup_User = 'root';
$Setup_Pwd = '';

$Setup_Database = 'db_smart';

mysql_connect($Setup_Server,$Setup_User,$Setup_Pwd);
mysql_query("use $Setup_Database");

?>