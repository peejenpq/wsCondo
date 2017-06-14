<?php

	$con = mysql_connect('localhost','root','masterkey' or die(mysql_error());
	mysql_select_db('test' or die(mysql_error()));
	mysql_query("Set Name UTF8");

	if(isset($_POST)){
		if($_POST['isAdd'] == 'true'){
			//$id = $_POST['id'];
			$room = $_POST['room'];
			$status = $_POST['status'];
			$namepic = $_POST['namepic'];
			$pic = $_POST['pic'];
			$sql = "Insert into 'visitor' ('room','status','namepic','pic')";

			mysql_query($sql);
		}
	}
	mysql_close();
?>