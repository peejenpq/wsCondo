<?php
	//start upload img form device to dir
	$tmp_name = $_FILES["myCameraImg"]["tmp_name"];
    $name = $_FILES["myCameraImg"]["name"];

	$timeFile = $room."_".date("dmy");
	$img_Name = $timeFile.".jpg";

    if(move_uploaded_file($tmp_name,"./img/".$img_Name)){
		$results = '{"results":"upload successfully"}';
	}else{
		$results = '{"results":"cannot upload img"}';
	}//end upload img form device to dir

	echo $results; //
?>