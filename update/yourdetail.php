<?php
	 include "//.conn.php";
	 if(isset($_POST['update']))
	 {
	 $id=$_POST['id'];
	 $fname=$_POST['fname'];
	 $lname=$_POST['lname'];
	 $room=$_POST['room'];
	 $phone=$_POST['phone'];
	 $q=mysqli_query($con,"UPDATE `your_detail` SET `fname`='$fname',`lname`='$lname',`room`='$room',`phone`='$phone' where `room`='$room'");
	 if($q)
	 echo "success";
	 else
	 echo "error";
	 }
 ?>