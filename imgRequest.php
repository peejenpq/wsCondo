<?php
	$tmp_name = $_FILES["myCameraImg"]["tmp_name"];
    $name = $_FILES["myCameraImg"]["name"];

	$timeFile = "501"."_".date("dmy");
	$img_Name = $timeFile.".jpg";

    if(move_uploaded_file($tmp_name,"./img/".$img_Name)){
		echo "Success Upload Image";
	}else{
		echo "Fail Upload Image";
	}
?>
