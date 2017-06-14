<?php
	include('../conn.php');

	$advertise = $_POST['advertise'];
	$sql = "INSERT INTO detail_home(post) VALUES('$advertise')";

	if($conn->query($sql) === TRUE){
		echo 'Post Added Successfully';
	}
	else{
		echo 'Failure';
	}
?>