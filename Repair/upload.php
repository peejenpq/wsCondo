<?php
function generateRandomString($length = 10) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

        $tmp_name = $_FILES["myCameraImg"]["tmp_name"];
        $name = $_FILES["myCameraImg"]["name"];

		$timeFile = date("dmyHis")."_".generateRandomString();
		$img_Name = $timeFile.".jpg";

        if(move_uploaded_file($tmp_name,"./img/".$img_Name)){
			echo "Success Upload Image";
		}else{
			echo "Fail Upload Image";
		}


?>