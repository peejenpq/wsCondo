<?php
header('Content-Type: application/json; charset=utf-8');
	$data = file_get_contents("php://input");
	$dataJsonDecode = json_decode($data);
	$var_room = $dataJsonDecode->var_room;
	$var_title = $dataJsonDecode->var_title;
	$var_description = $dataJsonDecode->var_description;
	$var_time = $dataJsonDecode->var_time;
	$var_phone = $dataJsonDecode->var_phone;
    $tmp_name = $_FILES["myCameraImg"]["tmp_name"];
    $name = $_FILES["myCameraImg"]["name"];
    $room = $var_room;
	//uploadimg
	$timeFile = $room."_".date("dmy");
	$img_Name = $timeFile.".jpg";

    if(move_uploaded_file($tmp_name,"./img/".$img_Name)){
		echo "Success Upload Image";
	}else{
		echo "Fail Upload Image";
	}
//end upload img

	
	$title = $var_title;
	$description = $var_description;
	$time = $var_time;
	$status = "wait";
	$phone = $var_phone;
	$linkimg = "http://27.131.160.116:8080/wsAnanda/img/".$img_Name;

	mysql_connect("localhost","root","masterkey");
	mysql_select_db("test");
	$strSQL = "INSERT INTO request(`Room`,`Title`,`Description`,`Time`,`Status`,`Phone`,`LinkImg`) VALUES('".$room."','".$title."','".$description."','".$time."','".$status."','".$phone."','".$linkimg."')";
	$results =  mysql_query($strSQL);

	if($results){
		$results = '{"results":"successfully"}';
	}
	else{
		$results = '{"results":"cannot insert"}';
	}
	echo $results;
	mysql_close();
?>
